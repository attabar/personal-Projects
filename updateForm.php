<?php 
if(isset($_GET['upid'])){
    $id = $_GET['upid'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/studentBioDataForm.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="form-container">
        <form id="submitForms" autocomplete="off" method="POST" action='<?php echo htmlentities("./PHP/update.php?id=$id")?>'>
            <div class="user-brand">
                <h2>Student Bio Data Update Form</h2>
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
</html>