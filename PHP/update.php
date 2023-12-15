<?php
error_reporting();
ini_set("error_display", 1);

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nationality = $_POST['nationality'];
    $state = $_POST['stat'];
    $lga = $_POST['lga']; 

    $sql = "UPDATE studenttable SET firstName = :fname, lastName = :lname, nationality = :nationality, stat = :stat, LGA = :lga WHERE id = :id";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":nationality", $nationality);
        $stmt->bindParam(":stat", $state);
        $stmt->bindParam(":lga", $lga);
        $stmt->execute();

        header("location:../crud.php"); 
    }catch(PDOException $error){
        // die("<h1 style='background:red'>"."Failed Updation: " . $error->getMessage()."</h1>");
        echo "<span style='background:red'>Error: " . $error->getMessage() . "</span>";
    }
}else{
    echo "ID IS NOT DEFINE";
}

?>