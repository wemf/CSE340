<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php if(isset($invInfo['invMake'])){ echo "$invInfo[invMake] $invInfo[invModel]";} ?> | PHP Motors</title>
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
                <div class="main_content">
                    <h1><?php if(isset($invInfo['invMake'])){ echo "$invInfo[invMake] $invInfo[invModel]";} ?></h1>
                    <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                    <div class="vehicle-details">
                        <div class="left-section">
                            <img class="vehicle-details-image" src="<?= $invInfo['invImage']; ?>" alt="<?= $invInfo['invMake'].' '.$invInfo['invModel']; ?> "/>
                            <p>
                                <span>Price: $<?= number_format($invInfo['invPrice'], 0) ?></span>
                            </p>
                        </div>
                        <div class="right-section">
                            <h2><?= $invInfo['invMake']." ".$invInfo['invModel']; ?> Details</h2>
                            <ul class="vehicle-details-attributes">
                                <li>
                                    <p><?= $invInfo['invDescription']; ?></p>
                                </li>
                                <li>
                                    <p><strong>Color:</strong><?= $invInfo['invColor']; ?></p>
                                </li>
                                <li>
                                    <p><strong>In Stock:</strong><?= $invInfo['invStock']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>