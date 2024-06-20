<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <form action="inscription.php" method="post" enctype="multipart/form-data">
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" required>
        <br>
        <label for="lastname">Nom:</label>
        <input type="text" id="lastname" name="lastname" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="mdp">Mot de passe:</label>
        <input type="password" id="mdp" name="mdp" required>
        <br>
        <label for="phonenumber">Numéro de téléphone:</label>
        <input type="text" id="phonenumber" name="phonenumber">
        <br>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image" required>
        <br>
        <label for="admin">Admin:</label>
        <input type="checkbox" id="admin" name="admin">
        <br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>

