<?php

namespace Model;

use PDOException;
use Entity\Favori;
use Config\DataBase;
use Entity\Item;
use Entity\User;
use PDO;

class FavoriModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createFavori(Favori $favori)
    {
        try {
            $userId = $favori->getUser()->getId();
            $itemId = $favori->getItem()->getId();

            $stmtFavori = self::$conn->prepare("INSERT INTO Favori (userId, carId) 
                                            VALUES (:userId, :itemId)");

            $stmtFavori->bindParam(":userId", $userId);
            $stmtFavori->bindParam(":carId", $carId);

            $stmtFavori->execute();

            $favoriId = self::$conn->query("SELECT MAX(id) FROM Favori")->fetchColumn();

            return $favoriId;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllFavoriOfUser(int $userId)
    {
        try {
            $stmtFavori = self::$conn->prepare("SELECT 'id', Favori.id,
                                                    'item', JSON_OBJECT('id', Item.id) AS item,
                                                    'user', JSON_OBJECT('id', User.id) AS user
                                                FROM Favori 
                                                LEFT JOIN Item ON Favori.itemId = Item.id
                                                LEFT JOIN User ON Favori.userId = User.id
                                                WHERE Favori.userId = :userId");
            $stmtFavori->bindParam(":userId", $userId);
            $stmtFavori->execute();

            $favoris = $stmtFavori->fetchAll(PDO::FETCH_ASSOC);

            $favoriList = [];

            foreach ($favoris as $favori) {
                $favori['item'] = new Item(...get_object_vars(json_decode($favori['item'])));
                $favori['user'] = new User(...get_object_vars(json_decode($favori['user'])));
                $favori = new Favori(...$favori);

                array_push($favoriList, $favori);
            }

            return $favoriList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deleteFavori(User $user, int $itemId)
    {
        $userId = $user->getId();
        try {
            $stmtFavori = self::$conn->prepare("DELETE FROM Favori WHERE userId = :userId AND itemId = :itemId");
            $stmtFavori->bindParam(":userId", $userId);
            $stmtFavori->bindParam(":itemId", $itemId);

            $stmtFavori->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
