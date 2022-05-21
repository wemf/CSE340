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
                <?php 
                    if (isset($message)) { 
                        $color = $message_type == 'success' ? 'green' : 'red';
                        echo "<span style='color: ".$color.";'>".$message."</span>"; 
                    } 
                ?>
                <form action="/">
                    <div class="field">
                        <label for="userEmail" class="">Email</label>
                        <input name="userEmail" type="text" id="userEmail" required>
                    </div>
                    <div class="field">
                        <label for="userPassword">Password</label>
                        <input name="userPassword" type="password" id="userPassword" required>
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