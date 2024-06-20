<?php

namespace Model;

use Entity\Item;
use Config\DataBase;
use Entity\Brand;
use Entity\Color;
use Entity\Size;
use Entity\Categorie;
use Entity\State;
use PDO;
use PDOException;

class ItemModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createItem(Item $item)
    {
        $name = $item->getName();
        $description = $item->getDescription();
        $price = $item->getPrice();
        $brand = $item->getBrand();
        $color = $item->getColor();
        $size = $item->getSize();
        $categorie = $item->getCategorie();
        $state = $item->getState();

        try {
            $stmtItem = self::$conn->prepare("INSERT INTO Item (name, description, price, brand, color, size, categorie, state) 
                                            VALUES (:name, :description, :price, :brand, :color, :size, :categorie, :state)");

            $stmtItem->bindParam(":name", $name);
            $stmtItem->bindParam(":description", $description);
            $stmtItem->bindParam(":price", $price);
            $stmtItem->bindParam(":brand", $brand);
            $stmtItem->bindParam(":color", $color);
            $stmtItem->bindParam(":size", $size);
            $stmtItem->bindParam(":categorie", $categorie);
            $stmtItem->bindParam(":state", $state);

            $stmtItem->execute();

            $item->setId(self::$conn->query("SELECT MAX(id) FROM Item")->fetchColumn());

            return $item;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getOneItem($id)
    {
        //A faire
    }

    public function getAllItem($id)
    {
        //A faire
    }

    public function getItemByFilter($id)
    {
        //A faire
    }

    public function deleteItem($id)
    {
        try {
            $stmtItem = self::$conn->prepare("DELETE FROM Item WHERE id = :id");
            $stmtItem->bindParam(":id", $id);

            $stmtItem->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}