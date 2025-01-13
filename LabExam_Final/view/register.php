<html>
<head>
    <title>Registration</title>
    <script>
        function validate() {
            let name = document.getElementById("name").value;
            let contact = document.getElementById("contact").value;
            let username = document.getElementById("username").value;
            let password = document.getElementById("password").value;

            if (!name || !contact || !username || !password) {
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
            <legend>Registration</legend>
            <table align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" value=""  /></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id="username" name="username" value=""  /></td>
                </tr>
                <tr>
                    <td>Contact_no:</td>
                    <td><input type="text" id="contact" name="contact" value=""  /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" value=""  /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="register" value="Register" />
                    </td>
                    <td><a href="login.php">Registered?</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
