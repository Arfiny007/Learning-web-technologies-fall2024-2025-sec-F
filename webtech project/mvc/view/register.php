<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../assets/registration.css">
    <script src="../assets/validation.js"></script>
</head>

<body>
    <div class="topbar">Tendify Online Shop</div>

    <form method="post" action="../controllers/auth.php"  onsubmit="return reg_validation()">
        <fieldset>
            <legend>Registration</legend>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input class="input" type="text" id="name" name="name" /></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input class= "input" type="text" id="username" name="username" /></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input class="input" type="email" id="email" name="email" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="input" type="password" id="password" name="password" /></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input class="input" type="password" id="confirm_password" name="confirm_password" /></td>
                </tr>
                <tr>
                    <td>Profile Image:</td>
                    <td><input class="input" type="file" id="profile_image" name="profile_image" accept="image/*" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="submit" type="submit" name="register" value="Register" /></td>
                </tr>
            </table>
            <p id="registerMessage"></p>
            <a class="registered-link" href="login.php">Already Registered? Login Here</a>
        </fieldset>
    </form>
</body>
</html>
