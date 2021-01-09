<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foglalas.css">
    <title>Lakatos István </title>
    <link rel="icon" type="image/jpeg" href="./img/icon.jpg">
</head>

<body>
    <div class="fejleckep"></div>
    <nav>
        <a id="Fooldal" href="index.php">Főoldal🏠</a>
        <a id="Mellekoldal" href="mellekoldal.php">Árlista💰</a>
        <a id="Elerhetoseg" href="elerhetoseg.php">Elérhetőség📱</a>
        <a id="Foglalas" href="foglalas.php">Foglalás</a>
    </nav>
    <h1>Időpont Foglalás</h1>
    <div class="szoveg">Időpontot a következőképpen foglalhat: <br>
        Megadja a nevét, illetve a telefonszámát, és én megkeresem önt telefonon, ahol részletesen meg tudjuk beszélni a munka további menetét!
        <div class="foglalas">
            <form action="feldolgoz.php" method="post">
                Név: <input type="text" name="nev"><br>
                E-mail: <input type="email" name="email"><br>
                Tel: <input type="number" name="datum" id="datum">
                <input type="submit" value="Elküldés">
            </form>
        </div>
    </div>
    <footer>
        <h1>Katona Németh Ádám</h1>
    </footer>
</body>

</html>