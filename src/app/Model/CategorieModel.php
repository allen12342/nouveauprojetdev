<?php

namespace Model;

use Entity\Categorie;
use Config\DataBase;
use PDO;
use PDOException;

class CategorieModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createColor(string $categorieName)
    {
        try {

            $stmtCategorie = self::$conn->prepare("INSERT INTO Categorie (name) VALUES (:name)");
            $stmtCategorie->bindParam(":name", $categorieName);

            $stmtCategorie->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getOneCategorie($id)
    {
        try {
            $stmtCategorie = self::$conn->query("SELECT * FROM Categorie WHERE id = $id");

            $result = $stmtCategorie->fetch(PDO::FETCH_ASSOC);

            $categorie = new Categorie(...$result);

            return $categorie;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllCategorie()
    {
        try {
            $stmtCategorie = self::$conn->prepare("SELECT * FROM Categorie");
            $stmtCategorie->execute();

            $categories = $stmtCategorie->fetchAll();

            $categorieList = [];

            foreach ($categories as $categorie) {
                $categorie = new Categorie($categorie['id'], $categorie['name']);
                $categorieList[] = $categorie;
            }

            return $categorieList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deleteCategorie($id)
    {
        try {
            $stmtCategorie = self::$conn->prepare("DELETE FROM Categorie WHERE id = :id");
            $stmtCategorie->bindParam(":id", $id);
            $stmtCategorie->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function checkCreate($categorieName)
    {
        try {
            $stmtCategorie = self::$conn->prepare("SELECT * FROM Categorie WHERE name = :name");
            $stmtCategorie->bindParam(":name", $categorieName);
            $stmtCategorie->execute();

            $categorie = $stmtCategorie->fetch(PDO::FETCH_ASSOC);

            if ($categorie) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}
