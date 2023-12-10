<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo "<script>alert($id)</script>";
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "challenge";

    $fname = $GET['fname'];
    $lname = $GET['lname'];
    $nationality = $GET['nationality'];
    $state = $GET['stat'];
    $lga = $GET['lga']; 

    $sql = "UPDATE studenttable SET fname = :fname, lname = :lname, nationality = :nationality, stat = :stat, LGA = :lga WHERE id = :id";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":fname", $fname);
        $stmt->bindParam(":lname", $lname);
        $stmt->bindParam(":nationality", $nationality);
        $stmt->bindParam(":stat", $state);
        $stmt->bindParam(":LGA", $lga);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        echo "<script>alert('Record Updated Successfully')</script>";
    }catch(PDOException $error){
        // die("<h1 style='background:red'>"."Failed Updation: " . $error->getMessage()."</h1>");
        echo "<script>alert('Failed')</script>";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/studentBioDataForm.css">
</head>
<body>
    <div class="form-container">
        <form id="submitForms" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <div class="user-brand">
                <h2>Student Bio Data Form</h2>
                <img src="./assets/img/studentAvatar.jpeg" alt="" srcset="">
            </div>
            <div class="message"></div>
            <div class="first-name-container">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
            </div>
            <div class="last-name-container">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
            </div>
            <div class="nationality-container">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality">
            </div>
            <div class="state-container">
                <label for="state">State</label>
                <input type="text" name="stat" id="state">
            </div>
            <div class="lga-container">
                <label for="lga">L.G.A</label>
                <input type="text" name="lga" id="lga">
            </div>
            <div class="button-container">
            <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html> -->