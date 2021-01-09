<?php
$nev =  $_POST["nev"];
$jelszo = $_POST["jelszo"]
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/listaz.css">
    <title>Adatok Listázása </title>
    <link rel="icon" type="image/jpeg" href="./img/icon.jpg">
</head>
<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "lakatos";
$conn = new mysqli($servername, $username, $password, $database);
if ($nev == "admin" && $jelszo =="admin") : ?>
    <body>
    

    <h1>Jelentkezők Listája:</h1>
    <div class="szoveg">

    <?php 
    $sql = "SELECT * FROM adatok";
    if ($result = $conn -> query($sql)) :
        while ($row = $result -> fetch_row()) {
          echo "Id: ".$row[0]."|"."Név: ". $row[1]."|" ."Email: ". $row[2]."|"."Telefonszám: ".$row[3];
          echo "<br>";
        }
        $result -> free_result();
    endif;
      
    
else :?>
    
<h1>Sikertelen bejelentkezés!</h1>
    

<a href="belepes.php" id="vissza">Vissza az előző oldalra!</a>


    </div>
   
</body>
<?php endif; ?>
</html>