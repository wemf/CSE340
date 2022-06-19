<?php
//check to see if user is logged in
if ($_SESSION['loggedin'] != TRUE) {
    header('Location: /phpmotors/');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin | PHP Motors</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div id="wrapper">
            <header>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/header.php" ?>
            </header>
            <nav>
                <?= $navList; ?>
            </nav>
            <main>
                <div class="main_content">
                    <h1>Logged in: <?= $_SESSION['clientData']['clientFirstname']." ".$_SESSION['clientData']['clientLastname']; ?></h1>
                    <p>You are logged in.</p>
                    <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                    <ul>
                        <li>First Name: <?= $_SESSION['clientData']['clientFirstname']; ?></li>
                        <li>Last Name: <?= $_SESSION['clientData']['clientLastname']; ?></li>
                        <li>Email: <?= $_SESSION['clientData']['clientEmail']; ?></li>
                    </ul>
                    <h2>Account Management</h2>
                    <p>Use this link to update account information.</p>
                    <a href="/phpmotors/accounts?action=update">Update Account Information</a>
                    <?php if($_SESSION['clientData']['clientLevel']>1){ ?>
                        <h2>Inventory Management</h2>
                        <p>Use this link to manage the inventory.</p>
                        <a href="/phpmotors/vehicles">Vehicle Management</a>
                    <?php } ?>
                </div>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>