<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?> | PHP Motors</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/header.php" ?>
            </header>
            <nav>
                <?php echo $navList; ?>
            </nav>
            <main>
                <h1>Register</h1>
                <form action="/">
                    <div class="field">
                        <label for="userFirstname">First Name</label><br>
                        <input name="userFirstname" id="userFirstname" type="text" required>
                    </div>
                    <div class="field">
                        <label for="userLastname">Last Name</label><br>
                        <input name="userLastname" id="userLastname" type="text" required>
                    </div>
                    <div class="field">
                        <label for="userEmail">Email</label><br>
                        <input name="userEmail" id="userEmail" type="text" required>
                    </div>
                    <div class="field">
                        <p>Passwords must be at least 8 characters and contain at least 1 number, 1 captital letter and 1 special character</p>
                        <label for="userPassword">Password</label>
                        <input name="userPassword" type="password" id="userPassword" required>
                        <br/>
                        <button class="btn btn--secondary" type="button" onclick="showPassword()">Show password</button>
                    </div>
                    <div class="field">
                        <button class="btn btn--primary" type="submit">Register</button>
                    </div>
                </form>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
        <script>
            function showPassword() {
                const inputPassword = document.getElementById("userPassword");
                inputPassword.type === "password" ? inputPassword.type = "text" : inputPassword.type = "password";
            }
        </script>
    </body>
</html>