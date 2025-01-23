<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/login.css">
    <script src="../assets/validation.js"></script>
</head>

<body>
    <header>
        <div class="topbar">Tendify Online Shop</div>
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="products.php">Shop</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <form method="post" action="../controllers/auth.php" onsubmit='return login_validate()'>
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input class="email" type="text" id="email" name="email" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="password" type="password" id="password" name="password" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="submit" type="submit" name="login" value="Login" /></td>
                </tr>
            </table>
            <P id="loginMessage"></P>
           
        </fieldset>
    </form>
</body>
</html>
