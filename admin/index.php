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
    <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>WETHESTREET <span class="glyphicon glyphicon-cutlery"></span></h1>
    <div class="container admin">
        <div class="row">
            <h1><strong>Liste des items   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Marque</th>
                        <th>Taille</th>
                        <th>Couleur</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'database.php';
                    $db = Database::connect();
                    $statement = $db->query('
                        SELECT items.id, items.name, items.description, items.price, 
                               categories.name AS category, brands.name AS brand, 
                               sizes.name AS size, colors.name AS color, states.name AS state 
                        FROM items 
                        LEFT JOIN categories ON items.category = categories.id 
                        LEFT JOIN brands ON items.brand = brands.id 
                        LEFT JOIN sizes ON items.size = sizes.id 
                        LEFT JOIN colors ON items.color = colors.id 
                        LEFT JOIN states ON items.state = states.id 
                        ORDER BY items.id DESC
                    ');
                    while ($item = $statement->fetch()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($item['name']) . '</td>';
                        echo '<td>' . htmlspecialchars($item['description']) . '</td>';
                        echo '<td>' . number_format($item['price'], 2, '.', '') . '</td>';
                        echo '<td>' . htmlspecialchars($item['category']) . '</td>';
                        echo '<td>' . htmlspecialchars($item['brand']) . '</td>';
                        echo '<td>' . htmlspecialchars($item['size']) . '</td>';
                        echo '<td>' . htmlspecialchars($item['color']) . '</td>';
                        echo '<td>' . htmlspecialchars($item['state']) . '</td>';
                        echo '<td width=300>';
                        echo '<a class="btn btn-default" href="view.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                        echo ' ';
                        echo '<a class="btn btn-primary" href="update.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    Database::disconnect();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
