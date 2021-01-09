<?php
$nev =  $_POST["nev"];
$email = $_POST["email"];
$tel = $_POST["telefon"];
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lakatos István </title>
    <link rel="icon" type="image/jpeg" href="./img/icon.jpg">
</head>

<body>
    <div class="fejleckep"></div>

    <h1>Sikeres Adatfelvétel!</h1>
    <div class="szoveg">

       Név: <?php echo $nev ?> <br>
       E-mail: <?php echo $email ?> <br>
       Tel: <?php echo $tel ?> <br>
       <?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "lakatos";
$conn = new mysqli($servername, $username, $password, $database);

$sql = "INSERT INTO Adatok (nev, email, tel) VALUES ('$nev', '$email', '$tel')";
if(mysqli_query($conn, $sql)){
    echo "Sikeresen adatfelvétel! Köszönjük!";
} else{
    echo "Sikertelen adatfelvétel!";
}
 
?>
    </div>
   
    <footer>
        <h1>Katona Németh Ádám</h1>
    </footer>
</body>

</html>