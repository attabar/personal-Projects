<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){

    
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $user = $_POST['username'];
    $pass = $_POST['password'];

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT * FROM admintable WHERE username = :username");
        $stmt->bindParam(":username", $user);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        if($row && password_verify($pass, $row['pass'])){
            $_SESSION['admin'] = $row['username'];
            echo "Admin Login Successfully...";
        }else{
            echo "Incorrect Username or Password !!!";
        }
    }catch(PDOException $error){

    }
}

?>