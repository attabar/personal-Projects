<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - CREATE READ UPDATE DELETE</title>
    <link rel="stylesheet" href="./assets/css/crud.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
<a href="./bioDataForm.php"><button class="addButton">Add Data</button></a>
<table>
  <tr>
    <th>S/N</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Nationality</th>
    <th>State</th>
    <th>L.G.A</th>
    <th>update</th>
    <th>delete</th>
  </tr>
    <?php
    include "./PHP/crudCommand.php";
    ?>
</table>

</body>
</html>