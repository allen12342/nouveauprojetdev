<?php

namespace Model;

use Entity\STate;
use Config\DataBase;
use PDO;
use PDOException;

class StateModel
{
    private static $conn;

    public function __construct()
    {
        $conn = new DataBase();
        self::$conn = $conn->connect();
    }

    public function createState(string $stateName)
    {
        try {

            $stmtState = self::$conn->prepare("INSERT INTO State (name) VALUES (:name)");
            $stmtState->bindParam(":name", $stateName);

            $stmtState->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getOneState($id)
    {
        try {
            $stmtState = self::$conn->query("SELECT * FROM State WHERE id = $id");

            $result = $stmtState->fetch(PDO::FETCH_ASSOC);

            $state = new State(...$result);

            return $state;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllState()
    {
        try {
            $stmtState = self::$conn->prepare("SELECT * FROM State");
            $stmtState->execute();

            $states = $stmtState->fetchAll();

            $stateList = [];

            foreach ($states as $state) {
                $state = new State($state['id'], $state['name']);
                $stateList[] = $state;
            }

            return $stateList;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deleteState($id)
    {
        try {
            $stmtState = self::$conn->prepare("DELETE FROM State WHERE id = :id");
            $stmtState->bindParam(":id", $id);

            $stmtState->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function checkCreate($stateName)
    {
        try {
            $stmtState = self::$conn->prepare("SELECT * FROM State WHERE name = :name");
            $stmtState->bindParam(":name", $stateName);
            $stmtState->execute();

            $state = $stmtState->fetch(PDO::FETCH_ASSOC);

            if ($state) {
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