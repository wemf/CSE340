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
                <?php 
                    if (isset($message)) { 
                        $color = $message_type == 'success' ? 'darkgreen' : 'darkred';
                        echo "<span style='color: ".$color.";'>".$message."</span>"; 
                    } 
                ?>
                <ul>
                    <li>
                        <a class="blackfont" href="/phpmotors/vehicles/index.php?action=add-vehicle">Add Vehicle</a><br>
                    </li>
                    <li>
                        <a class="blackfont" href="/phpmotors/vehicles/index.php?action=add-classification">Add Classification</a>
                    </li>
                </ul>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>