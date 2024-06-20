<?php
session_start();
require 'admin/database.php';

class SearchController
{
    private function getCommonData()
    {
        $db = Database::connect();
        $brands = $db->query('SELECT * FROM brands')->fetchAll();
        $size = $db->query('SELECT * FROM size')->fetchAll();
        $colors = $db->query('SELECT * FROM colors')->fetchAll();
        $state = $db->query('SELECT * FROM state')->fetchAll();
        Database::disconnect();

        return [
            'brands' => $brands,
            'size' => $size,
            'colors' => $colors,
            'state' => $state,
            'co' => $_SESSION['id'] ?? null
        ];
    }

    private function render($template, $data)
    {
        extract($data);
        include $template;
    }

    public function showSearch()
    {
        $db = Database::connect();
        $chaussure = $db->query('SELECT * FROM chaussure')->fetchAll();
        Database::disconnect();

        $commonData = $this->getCommonData();
        $commonData[''] = $vehicles;

        $this->render('views/Search.php', $commonData);
    }

    public function useFilters()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $brand = $_POST['myBrand'];
            $seat = $_POST['mySeat'];
            $color = $_POST['myColor'];
            $price = $_POST['myPrice'];

            $db = Database::connect();
            $query = 'SELECT * FROM vehicles WHERE 1=1';
            $params = [];

            if ($brand) {
                $query .= ' AND brand_id = ?';
                $params[] = $brand;
            }
            if ($seat) {
                $query .= ' AND seat_id = ?';
                $params[] = $seat;
            }
            if ($color) {
                $query .= ' AND color_id = ?';
                $params[] = $color;
            }
            if ($price) {
                $query .= ' AND price <= ?';
                $params[] = $price;
            }

            $statement = $db->prepare($query);
            $statement->execute($params);
            $vehicles = $statement->fetchAll();
            Database::disconnect();

            $commonData = $this->getCommonData();
            $commonData['vehicles'] = $vehicles;

            $this->render('views/Search.php', $commonData);
        }
    }

    public function findLocation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $location = $_POST['myLocation'];

            $db = Database::connect();
            $statement = $db->prepare('SELECT * FROM vehicles WHERE city_id = ?');
            $statement->execute([$location]);
            $vehicles = $statement->fetchAll();
            Database::disconnect();

            $commonData = $this->getCommonData();
            $commonData['vehicles'] = $vehicles;

            $this->render('views/Search.php', $commonData);
        }
    }
}
?>
