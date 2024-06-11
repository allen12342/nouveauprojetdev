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
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $phonenumber = htmlspecialchars($_POST['phonenumber']);
        $admin = isset($_POST['admin']) ? 1 : 0;
        $image = htmlspecialchars($_POST['image']);

        try {
           
            $conn->beginTransaction();

            
            $sql = "INSERT INTO users (firstname, lastname, email, mdp, phonenumber, image, admin) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $firstname);
            $stmt->bindParam(2, $lastname);
            $stmt->bindParam(3, $email);
            $stmt->bindParam(4, $mdp);
            $stmt->bindParam(5, $phonenumber);
            $stmt->bindParam(6, $image);
            $stmt->bindParam(7, $admin);
            $stmt->execute();

           
            $conn->commit();

           
            $_SESSION['success_message'] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
            header("Location: login.php");
            exit();
        } catch (PDOException $e) {
           
            $conn->rollBack();
            $error_message = "Erreur lors de l'inscription : " . $e->getMessage();
            echo $error_message;
        }
    }

   
    $conn = null;
    ?>
