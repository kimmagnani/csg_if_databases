<!DOCTYPE html>
<html>

<head>
    <title>Chalaki</title>
    <link rel="stylesheet" type="text/css" href="../css/designhs.css">
</head>

<body>
    <div class="myDiv">
        <a href="homescreen.php"><img src="../images/kookhoed.png" alt="hoed"> </a>
        <h1 class="Chalaki">Chalaki</h1>
        <a class="knop" href="../index.php">Uitloggen</a>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a class="knop2" href="postmaken.php">+</a>
    </div>
    <div class="posts">
        <h2>Dit zijn de recepten die andere mensen op de website hebben gedeeld. Wil jij ook een recept maken? Druk dan op de + knop in de bovenste balk!<br><br></h2>
        <p><b>(De recepten staan op alfabetische volgorde zodat jij makkerlijker het recept kan vinden dat jij zoekt!)</b></p>
        <?php
        include('connection.php');
        $sql = "SELECT * FROM Posts ORDER BY recept";
        $records = mysqli_query($con, $sql);
        if (mysqli_num_rows($records) > 0) {
            while ($record = mysqli_fetch_assoc($records)) {
                echo "Recept voor: " . $record["Recept"] . "<br>" . "Bereidingstijd: " . $record["Bereidingstijd"] . "<br>" . "<br>" . "Bereidingswijze: <br>" . $record["Bereidingswijze"] . "<br><br><br><br>";
            }
        } else {
            echo "Nog geen posts, je kan er natuurlijk altijd zelf eentje maken :)";
        } ?>
    </div>
</body>

</html>