<?php
session_start();

require 'admin/database.php';
// Obtenir la connexion à la base de données
$conn = Database::connect();

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    // Requête SQL pour vérifier l'utilisateur
    $sql = "SELECT id, firstname, lastname, admin FROM users WHERE email = :email AND mdp = :mdp";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mdp', $mdp);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Si l'utilisateur existe
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['first_name'] = $user['firstname'];
        $_SESSION['last_name'] = $user['lastname'];
        $_SESSION['admin'] = $user['admin'];

        echo "Connexion réussie. Bienvenue, " . $user['firstname'] . "!";
        // Redirection vers la page d'accueil ou une autre page
        header("Location: ../index.php");
        exit();
    } else {
        $error_message = "Email ou mot de passe incorrect.";
    }
}

Database::disconnect();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="mdp">Mot de passe:</label>
        <input type="password" id="mdp" name="mdp" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
