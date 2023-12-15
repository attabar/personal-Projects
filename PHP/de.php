<?php

if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    echo $id; 

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $delete = "DELETE FROM studenttable WHERE id = :id";
    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare($delete);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        if($stmt){
            header("location:../crud.php");
        }else{
            echo "Not Deleted";
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
}
?>