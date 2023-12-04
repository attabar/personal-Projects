<?php

require_once 'connection.php';

try{
    // Create Database
    $database = $conn->query("CREATE DATABASE challenge");
    if(!$database){
        echo "Error While Creating Database: " . $conn->error;
    }
    else{
        // Select the database then create tables on it
        $selectDB = $conn->select_db("challenge");
        // Admin table
        $adminTable = $conn->query(
            "CREATE TABLE adminTable(
                id int(11),
                username VARCHAR(255),
                pass VARCHAR(255),
                PRIMARY KEY(id)
            )"
        );
        // student table
        $studentTable = $conn->query(
            "CREATE TABLE studentTable(
                id int(11) AUTO_INCREMENT,
                firstName VARCHAR(255),
                lastName VARCHAR(255),
                nationality VARCHAR(255),
                stat VARCHAR(255),
                LGA VARCHAR(255),
                PRIMARY KEY(id)  
            )"
        );
        // check if one of this two table is not created then generate error message
        if(!$adminTable || !$studentTable){
            echo "Error While Creating Tables: " . $conn->error;
        }else{
            // otherwise that is if found no error execute the code block
            $username = "AbdulmalikDev";
            $password = password_hash("AbdulmalikDev@306", PASSWORD_DEFAULT);
            $adminData = $conn->prepare("INSERT INTO admintable(username, pass) VALUES(?,?)");
            $adminData->bind_param("ss", $username, $password);
            $adminData->execute();
            // check if data were inserted into admin table
            if($adminData){
                echo "All Tables Created Successfully and admin data were inserted successfully";
            }else{
                echo $conn->error;
            }
            // echo "Tables Created Successfully";
        }
    }
}catch(exception $error){
    echo $error->getMessage();
}

?>