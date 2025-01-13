<html>
<head>
    <title>Login</title>
    <script>
        function validate() {
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (!username || !password) {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="../controller/auth.php" onsubmit="return validate()" align="center">
        <fieldset>
            <legend>Login</legend>
            <table align="center">
                <tr>
                    <td>username:</td>
                    <td><input type="text" id="username" name="username" value="" required /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" value="" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login" value="Login" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
