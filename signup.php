<?php 
 
 class Signup{
    public function signup()
    {

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $port = 8889;
    $username = "my_user";
    $db_password = "my_password"; 
    $dbname = "my_database";


    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $user_password = $_POST["password"];
    $avatar = $_POST["avatar"]; 

    $conn = new mysqli($servername, $username, $db_password, $dbname, $port);

    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    
    $sql = $conn->prepare("INSERT INTO  users (first_name, last_name, email, password, avatar) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $first_name, $last_name, $email, $user_password, $avatar);

    if ($sql->execute()) {
        echo "Bonjour à vous, $first_name! Vous faites désormais partie de notre famille. Faites-vous plaisir!";
    } else {
        echo "Erreur lors de l'inscription: " . $conn->error;
    }

    $sql->close();
    $conn->close();
}

        
    }
 }

?>