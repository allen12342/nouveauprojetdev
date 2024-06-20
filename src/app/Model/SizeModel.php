<?php

namespace Model;

use Entity\Size;
use Config\DataBase;
use PDO;
use PDOException;

class SizeModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createSize(string $sizeName)
    {
        try {

            $stmtSize = self::$conn->prepare("INSERT INTO Size (name) VALUES (:name)");
            $stmtSize->bindParam(":name", $sizeName);

            $stmtSize->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getOneSize($id)
    {
        try {
            $stmtSize = self::$conn->query("SELECT * FROM Size WHERE id = $id");

            $result = $stmtSize->fetch(PDO::FETCH_ASSOC);

            $size = new Size(...$result);

            return $size;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllSize()
    {
        try {
            $stmtSize = self::$conn->prepare("SELECT * FROM Size");
            $stmtSize->execute();

            $sizes = $stmtSize->fetchAll();

            $sizeList = [];

            foreach ($sizes as $size) {
                $size = new Size($size['id'], $size['name']);
                $sizeList[] = $size;
            }

            return $sizeList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deleteSize($id)
    {
        try {
            $stmtSize = self::$conn->prepare("DELETE FROM Size WHERE id = :id");
            $stmtSize->bindParam(":id", $id);

            $stmtSize->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function checkCreate($sizeName)
    {
        try {
            $stmtSize = self::$conn->prepare("SELECT * FROM Size WHERE name = :name");
            $stmtSize->bindParam(":name", $sizeName);
            $stmtSize->execute();

            $size = $stmtSize->fetch(PDO::FETCH_ASSOC);

            if ($size) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}