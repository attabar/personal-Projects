<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nationality = $_POST['nationality'];
    $state = $_POST['stat'];
    $lga = $_POST['lga'];

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO studenttable(firstName, lastName, nationality, stat, LGA) VALUES(:fname, :lname, :nationality, :stat, :lga)");
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":nationality", $nationality);
        $stmt->bindParam(":stat", $state);
        $stmt->bindParam(":lga", $lga);
        $stmt->execute();

        echo "Data Inserted Successfully";

    }catch(PDOException $error){
        echo "Error: " . $error->getMessage();
    }
}






?>