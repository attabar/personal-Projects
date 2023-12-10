<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "challenge";
$sql = "SELECT * FROM studenttable";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $row){
        $_GET['id'] = $row['id'];
        $id = $_GET["id"];
        $fname = $row['firstName'];
        $lname = $row['lastName'];
        $nationality = $row['nationality'];
        $state = $row['stat'];
        $lga = $row['LGA'];

        echo "<tr><td>$fname</td><td>$lname</td><td>$nationality</td><td>$state</td><td>$lga</td><td><a href='./PHP/delete.php?delete=$id'><i class='bi bi-trash3-fill'></i></a></td><td><a href='./updateForm.php?update=$id'><i class='bi bi-pencil-square'></i></a></td></tr>";
    }

}catch(PDOException $error){
    echo "Error: " . $error->getMessage();
}