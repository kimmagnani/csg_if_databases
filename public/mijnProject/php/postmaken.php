<!DOCTYPE html>
<html>

<head>
    <title>Post maken</title>
    <link rel="stylesheet" type="text/css" href="../css/designhs.css">

</head>

<body>
    <div class="myDiv">
        <a href="homescreen.php"><img src="../images/kookhoed.png" alt="hoed"> </a>
        <h1 class="Chalaki">Chalaki</h1>

    </div>
    <div id="blok">
        <form action="postcommit.php" method="post" enctype="multipart/form-data">
            <h1>Post maken</h1>
            <label>Recept voor:</label>
            <br>
            <textarea maxlength="50" id="NaamRecept" style="resize:none" name="Receptnaam" rows="1" cols=30></textarea>
            <br>
            <label>Bereidingstijd:</label>
            <br>
            <textarea maxlength="20"id="Tijdbereiding" style="resize:none" name="Tijd" rows="1" cols=10></textarea>
            <br>
            <label>Bereidingswijze:</label>
            <textarea maxlength="2000" id="Bereiding" style="resize:none" name="bereidingswijze" rows="25" cols=59></textarea>
            <input type="submit" id="submitpost" value="Post maken" />
        </form>
    </div>
</body>

</html>