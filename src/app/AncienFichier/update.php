<?php

require 'admin/database.php';

if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

$db = Database::connect();
$statement = $db->prepare("SELECT * FROM items WHERE id = ?");
$statement->execute(array($id));
$item = $statement->fetch();
$name = $item['name'];
$description = $item['description'];
$price = $item['price'];
$category = $item['category'];
$brand = $item['brand'];
$state = $item['state'];
$size = $item['size'];
$color = $item['color'];
$image = $item['image'];
Database::disconnect();

function checkInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>WETHESTREET</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>WETHESTREET<span class="glyphicon glyphicon-cutlery"></span></h1>
    <div class="container admin">
        <div class="row">
            <div class="col-sm-6">
                <h1><strong>Voir un item</strong></h1>
                <br>
                <form class="form" role="form">
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix: (en €)</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="<?php echo $price; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie:</label>
                        <select class="form-control" id="category" name="category" disabled>
                        <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM categories') as $row) {
                                if ($row['id'] == $category)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            Database::disconnect();
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="size">Taille:</label>
                        <select class="form-control" id="size" name="size" disabled>
                        <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM sizes') as $row) {
                                if ($row['id'] == $size)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            Database::disconnect();
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="color">Couleurs:</label>
                        <select class="form-control" id="color" name="color" disabled>
                        <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM colors') as $row) {
                                if ($row['id'] == $color)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            Database::disconnect();
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="brand">Marque:</label>
                        <select class="form-control" id="brand" name="brand" disabled>
                        <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM brands') as $row) {
                                if ($row['id'] == $brand)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            Database::disconnect();
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="state">Etat:</label>
                        <select class="form-control" id="state" name="state" disabled>
                        <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM states') as $row) {
                                if ($row['id'] == $state)
                                    echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                else
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                            }
                            Database::disconnect();
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <p><?php echo $image; ?></p>
                    </div>
                    <br>
                    <div class="form-actions">
                        <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 site">
                <div class="thumbnail">
                    <img src="<?php echo '../images/' . $image; ?>" alt="...">
                    <div class="price"><?php echo number_format((float)$price, 2, '.', '') . ' €'; ?></div>
                    <div class="caption">
                        <h4><?php echo $name; ?></h4>
                        <p><?php echo $description; ?></p>
                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
