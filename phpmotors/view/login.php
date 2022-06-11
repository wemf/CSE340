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
                <h1>Sign in</h1>
                <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                <form action="/phpmotors/accounts/index.php" method="post">
                    <input type="hidden" name="action" value="Login">
                    <div class="field">
                        <label for="clientEmail" class="">Email</label>
                        <input name="clientEmail" type="text" id="clientEmail" required>
                    </div>
                    <div class="field">
                        <label for="clientPassword">Password</label>
                        <input name="clientPassword" type="password" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                    </div>
                    <div class="field">
                        <button class="btn btn--primary" type="submit">Sign-in</button>
                    </div>
                    <a href="/phpmotors/accounts?action=registration">No a member yet?</a>
                </form>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>