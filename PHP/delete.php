<?php

session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $delete = "DELETE FROM studenttable WHERE id = :id";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);

        $stmt = $conn->prepare($delete);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        header("location:../crud.php");
        // echo "Deleted Successfully";

    }catch(PDOException $error){
        die("Delete Failed: " . $error->getMessage());
    }
}

?>