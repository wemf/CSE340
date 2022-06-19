<?php
if ($_SESSION['clientData']['clientLevel'] < 2) {
    header('location: /phpmotors/');
    exit;
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
                <h2>Vehicle Management</h2>
                <ul>
                    <li>
                        <a class="blackfont" href="/phpmotors/vehicles/index.php?action=add-vehicle">Add Vehicle</a><br>
                    </li>
                    <li>
                        <a class="blackfont" href="/phpmotors/vehicles/index.php?action=add-classification">Add Classification</a>
                    </li>
                </ul>
                <?php
                    if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); }
                    if (isset($classificationList)) { 
                        echo '<h2>Vehicles By Classification</h2>'; 
                        echo '<p>Choose a classification to see those vehicles</p>'; 
                        echo $classificationList; 
                    }
                ?>
                <noscript>
                    <p><strong>JavaScript Must Be Enabled to Use this Page.</strong></p>
                </noscript>
                <table id="inventoryDisplay"></table>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
            <script src="../js/inventory.js"></script>
        </div>
    </body>
</html>