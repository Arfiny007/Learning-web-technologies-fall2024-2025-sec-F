<html>
<head>
    <title>Registration</title>
    <script>
        function validate() {
            let name = document.getElementById("name").value;
            let username = document.getElementById("username").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            let cpassword = document.getElementById("confirm_password").value;


            if (!name ||!username ||!email|| !password  || !cpassword) {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="../controllers/auth.php" onsubmit="return validate()" align="center">
        <fieldset>
            <legend>Registration</legend>
            <table align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" value=""  /></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id= "username" name="username" value=""  /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id = "email" name="email" value=""  /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id ="password" name="password" value=""  /></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" id = "confirm_password" name="confirm_password" value="" /></td>
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
