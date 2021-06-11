<!DOCTYPE html>
<html>

<head>
    <title>Account aanmaken</title>
    <link rel="stylesheet" type="text/css" href="../css/designAA.css">

</head>

<body>
    <div id="blok">
        <form action="Accountcommit.php" method="post" enctype="multipart/form-data">
            <h1>Account aanmaken</h1>
            <p>Gebruikersnaam:</p>
            <input type="text" id="newuser" name="newuser" />
            <br>
            <p>Wachtwoord:</p>
            <input type="password" id="newpass" name="newpass" />
            <br>
            <br>
            <input type="submit" id="Aanmaakknop" value="Aanmaken" />
        </form>
    </div>
</body>

</html>