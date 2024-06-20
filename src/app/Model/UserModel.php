<?php

namespace Model;

use Config\DataBase;
use PDO;
use PDOException;
use Entity\User;
use Entity\Item;
use Entity\Brand;
use Entity\Color;
use Entity\Favori;
use Entity\Size;
use Entity\Categorie;
use Entity\State;

class UserModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createUser(User $user)
    {
        $email = $user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_DEFAULT);
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $phone = $user->getPhone();
        $isAdmin = $user->getIsAdmin() ? 1 : 0;

        try {
            $stmtUser = self::$conn->prepare("INSERT INTO User (email, password, firstName, lastName, phone, isAdmin) 
                                            VALUES (:email, :password, :firstName, :lastName, :phone, :isAdmin)");

            $stmtUser->bindParam(":email", $email);
            $stmtUser->bindParam(":password", $password);
            $stmtUser->bindParam(":firstName", $firstName);
            $stmtUser->bindParam(":lastName", $lastName);
            $stmtUser->bindParam(":phone", $phone);
            $stmtUser->bindParam(":isAdmin", $isAdmin);

            $stmtUser->execute();

            $user->setId(self::$conn->query("SELECT MAX(id) FROM User")->fetchColumn());

            return $user;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllUser()
    {
        try {
            $query = "SELECT User.id, User.email, User.status FROM User ORDER BY User.email ASC";

            $stmt = self::$conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $userList = [];

            foreach ($result as $user) {
                $user = new User(...$user);
                array_push($userList, $user);
            }

            return $userList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getOneUser(Int $id)
    {
        try {
            $query = "SELECT User.id, User.email, User.password, User.firstName, User.lastName, User.phone,
            (SELECT JSON_ARRAYAGG(JSON_OBJECT('id', Favori.id,
                    'item', JSON_OBJECT('id', Item.id, 'name', Item.name, 'description', Item.description, 'price', Item.price, 'image', Item.image,
                        'brand', JSON_OBJECT('id', Brand.id, 'name', Brand.name),
                        'size', JSON_OBJECT('id', Size.id, 'name', Size.name),
                        'categorie', JSON_OBJECT('id', Categorie.id, 'name', Categorie.name),
                        'state', JSON_OBJECT('id', State.id, 'name', State.name),
                        'color', JSON_OBJECT('id', Color.id, 'name', Color.name)))) 
                FROM Favori 
                LEFT JOIN Item ON Favori.itemId = Item.id
                LEFT JOIN Brand ON Item.brandId = Brand.id
                LEFT JOIN Size ON Item.sizeId = Size.id
                LEFT JOIN Categorie ON Item.categorieId = Categorie.id
                LEFT JOIN State ON Item.stateId = State.id
                LEFT JOIN Color ON Item.colorId = Color.id
                WHERE User.id = Favori.userId
            ) AS favoris,
            User.isAdmin
            FROM User
            WHERE User.id = $id;";

            $stmt = self::$conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result['favoris'] != null) {
                $result['favoris'] = json_decode($result['favoris'], true);

                for ($i = 0; $i < sizeof($result['favoris']); $i++) {
                    $result['favoris'][$i]['car']['brand'] = new Brand(...$result['favoris'][$i]['car']['brand']);
                    $result['favoris'][$i]['car']['size'] = new Size(...$result['favoris'][$i]['car']['size']);
                    $result['favoris'][$i]['car']['categorie'] = new Categorie(...$result['favoris'][$i]['car']['categorie']);
                    $result['favoris'][$i]['car']['state'] = new State(...$result['favoris'][$i]['car']['state']);
                    $result['favoris'][$i]['car']['color'] = new Color(...$result['favoris'][$i]['car']['color']);
                    $result['favoris'][$i]['car'] = new Item(...$result['favoris'][$i]['item']);
                    $result['favoris'][$i] = new Favori(...$result['favoris'][$i]);
                }
            } else {
                $result['favoris'] = [];
            }

            array_pop($result);
            $result = new User(...$result);

            return $result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function checkLogin(String $email, String $password)
    {
        try {
            $stmt = self::$conn->prepare("SELECT id, email, password, status FROM User WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result['status'] != 0) {
                if ($result != false && password_verify($password, $result['password'])) {
                    return $result['id'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function checkRegister(String $email)
    {
        try {
            $stmt = self::$conn->prepare("SELECT EXISTS(SELECT * from User WHERE email = :email) AS count;");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result['count'] == 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deleteUser(Int $id)
    {
        try {
            $stmt = self::$conn->prepare("DELETE FROM User WHERE id = $id");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
