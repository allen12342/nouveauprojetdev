<?php
session_start();


$servername = "localhost";
$port = 8889;
$username = "root";
$password = "1234"; 
$dbname = "chaussure";

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mdp = $_POST['mdp'];

    try {
       
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($mdp, $user['mdp'])) {
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_firstname'] = $user['firstname'];
            $_SESSION['user_lastname'] = $user['lastname'];
            $_SESSION['is_admin'] = $user['admin'];

           
            header("Location: index.php");
            exit();
        } else {
            
            $error_message = "Email ou mot de passe incorrect.";
            echo $error_message;
        }
    } catch (PDOException $e) {
        $error_message = "Erreur lors de la connexion : " . $e->getMessage();
        echo $error_message;
    }
}

$conn = null;
?>
