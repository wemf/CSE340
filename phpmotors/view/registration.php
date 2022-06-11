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
                <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                <form method="post" action="/phpmotors/accounts/index.php">
                    <input type="hidden" name="action" value="register">
                    <div class="field">
                        <label for="clientFirstname">First Name</label><br>
                        <input name="clientFirstname" id="clientFirstname" type="text" required <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";} ?>>
                    </div>
                    <div class="field">
                        <label for="clientLastname">Last Name</label><br>
                        <input name="clientLastname" id="clientLastname" type="text" required <?php if(isset($clientLastname)){echo "value='$clientFirstname'";} ?>>
                    </div>
                    <div class="field">
                        <label for="clientEmail">Email</label><br>
                        <input name="clientEmail" id="clientEmail" type="email" required <?php if(isset($clientEmail)){echo "value='$clientEmail'";} ?>>
                    </div>
                    <div class="field">
                        <p>Passwords must be at least 8 characters and contain at least 1 number, 1 captital letter and 1 special character</p>
                        <label for="clientPassword">Password</label>
                        <input name="clientPassword" type="password" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
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
                const inputPassword = document.getElementById("clientPassword");
                inputPassword.type === "password" ? inputPassword.type = "text" : inputPassword.type = "password";
            }
        </script>
    </body>
</html>