<?php

session_start();

if(isset($_SESSION['admin'])){
    $adminUsername = $_SESSION['admin'];

    echo "<h1 style='text-align:center'> " . $adminUsername . "You're Welcome To World of PHP Dev Challenge" . "</h1>";
}
?>