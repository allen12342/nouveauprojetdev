<?php

class Signup {
    // Attributs de classe pour la configuration de la base de données
    private $dbHost = "localhost";
    private $dbPort = 8889;
    private $dbUsername = "my_user";
    private $dbUserpassword = "my_password";
    private $dbName = "chaussure";

    // Méthode pour l'inscription
    public function signup() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $email = $_POST["email"];
            $user_password = $_POST["password"];
            $avatar = $_POST["avatar"]; 

            // Connexion à la base de données
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbUserpassword, $this->dbName, $this->dbPort);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("La connexion a échoué : " . $conn->connect_error);
            }

            // Préparation et exécution de la requête SQL
            $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, avatar) VALUES (?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $first_name, $last_name, $email, $user_password, $avatar);

            if ($sql->execute()) {
                echo "Bonjour à vous, $first_name! Vous faites désormais partie de notre famille. Faites-vous plaisir!";
            } else {
                echo "Erreur lors de l'inscription: " . $conn->error;
            }

            // Fermeture de la connexion et de la requête
            $sql->close();
            $conn->close();
        }
    }
}

// Exemple d'utilisation de la classe Signup
$signup = new Signup();
$signup->signup();

?>
