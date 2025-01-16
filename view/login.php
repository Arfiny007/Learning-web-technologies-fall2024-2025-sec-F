<html>
<head>
    <title>Login</title>
    <script>
        function validate() {
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
             if (!email|| !password) {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="../controllers/auth.php" onsubmit='return validate()' align="center">
        <fieldset>
            <legend>Login</legend>
            <table align="center">
                <tr>
                    <td>Email:</td>
                    <td><input type="text" id="email" name="email" value=""  /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" value="" /></td>
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
