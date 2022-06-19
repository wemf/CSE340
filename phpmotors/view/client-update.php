<?php
    if (!isset($_SESSION['loggedin'])) {
        header('location: /phpmotors/');
    }
?>
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
                    <h1>Manage Account</h1>
                    <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                    <h2>Update Account</h2>
                    <form method="post" action="/phpmotors/accounts/">
                        <input type="hidden" name="action" value="updateAccount">
                        <input type="hidden" name="clientId" value="<?php echo $clientInfo['clientId'];?>">
                        <div class="field">
                            <label for="clientFirstname">First Name</label><br>
                            <input name="clientFirstname" id="clientFirstname" type="text" <?php if(isset($clientInfo['clientFirstname'])){ echo "value='$clientInfo[clientFirstname]'"; } elseif(isset($clientFirstname)){ echo "value='$clientFirstname'";} ?> required>
                        </div>
                        <div class="field">
                            <label for="clientLastname">Last Name</label><br>
                            <input name="clientLastname" id="clientLastname" type="text" <?php if(isset($clientInfo['clientLastname'])){ echo "value='$clientInfo[clientLastname]'"; } elseif(isset($clientLastname)){ echo "value='$clientLastname'";} ?> required>
                        </div>
                        <div class="field">
                            <label for="clientEmail">Email</label><br>
                            <input name="clientEmail" id="clientEmail" type="email" <?php if(isset($clientInfo['clientEmail'])){ echo "value='$clientInfo[clientEmail]'"; } elseif(isset($clientEmail)){ echo "value='$clientEmail'";} ?> required>
                        </div>
                        <div class="field">
                            <button class="btn btn--primary" type="submit">Update</button>
                        </div>
                    </form>
                    <h2>Update Password</h2>
                    <form method="post" action="/phpmotors/accounts/">
                        <input type="hidden" name="action" value="updatePassword">
                        <input type="hidden" name="clientId" value="<?php echo $clientInfo['clientId'];?>">
                        <div class="field">
                            <p>Passwords must be at least 8 characters and contain at least 1 number, 1 captital letter and 1 special character</p>
                            <p>* Note your original password will be changed.</p>
                            <label for="clientPassword">New Password</label>
                            <input name="clientPassword" type="password" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                            <br/>
                            <button class="btn btn--secondary" type="button" onclick="showPassword()">Show password</button>
                        </div>
                        <div class="field">
                            <button class="btn btn--primary" type="submit">Update Password</button>
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