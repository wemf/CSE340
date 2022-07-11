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
        <title><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ echo "Modify $invInfo[invMake] $invInfo[invModel]";} elseif(isset($invMake) && isset($invModel)) { echo "Modify $invMake $invModel"; }?> | PHP Motors</title>
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
                    <h1><?php if(isset($invInfo['invMake']) && isset($invInfo['invModel'])){ echo "Modify $invInfo[invMake] $invInfo[invModel]";} elseif(isset($invMake) && isset($invModel)) { echo "Modify $invMake $invModel"; }?></h1>
                    <?php if (isset($_SESSION['message'])) { echo $_SESSION['message']; unset($_SESSION['message']); } ?>
                    <form action="/phpmotors/vehicles/index.php" method="post">
                        <input type="hidden" name="action" value="updateVehicle">
                        <input type="hidden" name="invId" value="<?php if(isset($invInfo['invId'])){ echo $invInfo['invId'];} elseif(isset($invId)){ echo $invId; } ?>">
                        <p>*Note all Fields are Required</p>
                        <div class="field">
                            <label for="classificationId">Select a Classification:</label><br>
                            <?php
                                // Build the classifications option list
                                $classifList = '<select name="classificationId" id="classificationId">';
                                $classifList .= "<option>Choose a Car Classification</option>";
                                foreach ($carClassifications as $classification) {
                                    $classifList .= "<option value='$classification[classificationId]'";
                                    if(isset($classificationId)){
                                        if($classification['classificationId'] === $classificationId){
                                            $classifList .= ' selected ';
                                        }
                                        } elseif(isset($invInfo['classificationId'])){
                                        if($classification['classificationId'] === $invInfo['classificationId']){
                                            $classifList .= ' selected ';
                                        }
                                    }
                                    $classifList .= ">$classification[classificationName]</option>";
                                }
                                $classifList .= '</select>';
                                echo $classifList;
                            ?>
                        </div>
                        <div class="field">
                            <label for="invMake">Make:</label><br>
                            <input type="text" name="invMake" id="invMake" <?php if(isset($invMake)){ echo "value='$invMake'"; } elseif(isset($invInfo['invMake'])) {echo "value='$invInfo[invMake]'"; }?> required>
                        </div>
                        <div class="field">
                            <label for="invModel">Model:</label><br>
                            <input type="text" name="invModel" id="invModel" <?php if(isset($invModel)){ echo "value='$invModel'"; } elseif(isset($invInfo['invModel'])) {echo "value='$invInfo[invModel]'"; }?> required>
                        </div>
                        <div class="field">
                            <label for="invDescription">Description:</label><br>
                            <textarea name="invDescription" id="invDescription" required><?php if(isset($invDescription)){ echo $invDescription; } elseif(isset($invInfo['invDescription'])) {echo $invInfo['invDescription']; }?></textarea>
                        </div>
                        <div class="field">
                            <label for="invYear">Year:</label><br>
                            <input type="text" name="invYear" id="invYear" <?php if(isset($invYear)){ echo "value='$invYear'"; } elseif(isset($invInfo['invYear'])) {echo "value='$invInfo[invYear]'"; }?> required>
                        </div>
                        <div class="field">
                            <label for="invPrice">Price:</label><br>
                            <input type="text" name="invPrice" id="invPrice" <?php if(isset($invPrice)){ echo "value='$invPrice'"; } elseif(isset($invInfo['invPrice'])) {echo "value='$invInfo[invPrice]'"; }?> required>
                        </div>
                        <div class="field">
                            <label for="invMiles">Miles:</label><br>
                            <input type="text" name="invMiles" id="invMiles" <?php if(isset($invMiles)){ echo "value='$invMiles'"; } elseif(isset($invInfo['invMiles'])) {echo "value='$invInfo[invMiles]'"; }?> required>
                        </div>
                        <div class="field">
                            <label for="invColor">Color:</label><br>
                            <input type="text" name="invColor" id="invColor" <?php if(isset($invColor)){ echo "value='$invColor'"; } elseif(isset($invInfo['invColor'])) {echo "value='$invInfo[invColor]'"; }?> required>
                        </div>
                        <div class="field">
                            <button class="btn btn--primary" type="submit">Update Vehicle</button>
                        </div>
                    </form>
                </div>
            </main>
            <hr>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/phpmotors/common/footer.php" ?>
            </footer>
        </div>
    </body>
</html>