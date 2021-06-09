<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/design.css">
</head>

<body>
    <div id="frm">
        <div id="plaatje">
            <img class="image" src="images/kookhoed.png" alt="Hoed" class="center">
        </div>
        <div id="login">
            <h1>Login</h1>
            <form name="f1" action="php/authentication.php" onsubmit="return validation()" method="POST">
                <p>
                    <label> Username: </label>
                    <br><input type="text" id="user" name="user" />
                </p>
                <p>
                    <label> Password: </label>
                    <br><input type="password" id="pass" name="pass" />
                </p>
                <p>
                    <input type="submit" id="loginknop" value="Login" />
                    <br><a href="php/homescreen.html">account aanmaken</a>
                </p>
            </form>
        </div>
    </div>
    <script>
        function validation() {
            var id = document.f1.user.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("Username and Password fields are empty");
                return false;
            } else {
                if (id.length == "") {
                    alert("Username is empty");
                    return false;
                }
                if (ps.length == "") {
                    alert("Password field is empty");
                    return false;
                }
            }

        }
    </script>
</body>

</html>