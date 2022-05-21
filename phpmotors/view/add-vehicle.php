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
                <div class="main_content">
                    <h1>Add Vehicle</h1>
                    <?php 
                        if (isset($message)) { 
                            $color = $message_type == 'success' ? 'darkgreen' : 'darkred';
                            echo "<span style='color: ".$color.";'>".$message."</span>"; 
                        } 
                    ?>
                    <form action="/phpmotors/vehicles/index.php" method="post">
                        <input type="hidden" name="action" value="addVehicleToDatabase">
                        <p>*Note all Fields are Required</p>
                        <div class="field">
                            <label for="classificationId">Select a Classification:</label><br>
                            <?php 
                                $classificationList = '<select name="classificationId" id="classificationId">';
                                foreach ($classifications as $classification) {
                                    $classificationList .= "<option value='$classification[classificationId]'";
                                    if(isset($classificationId)){
                                        if($classification['classificationId'] === $classificationId){
                                            $classificationList .= ' selected ';
                                        }
                                    }
                                    $classificationList .= ">$classification[classificationName]</option>";
                                }
                                $classificationList .= '</select>';
                                echo $classificationList;
                            ?>
                        </div>
                        <div class="field">
                            <label for="invMake">Make:</label><br>
                            <input type="text" name="invMake" id="invMake">
                        </div>
                        <div class="field">
                            <label for="invModel">Model:</label><br>
                            <input type="text" name="invModel" id="invModel">
                        </div>
                        <div class="field">
                            <label for="invDescription">Description:</label><br>
                            <textarea name="invDescription" id="invDescription"></textarea>
                        </div>
                        <div class="field">
                            <label for="invImage">Image Path:</label><br>
                            <input type="text" name="invImage" id="invImage" value="/phpmotors/images/no-image.png">
                        </div>
                        <div class="field">
                            <label for="invThumbnail">Thumbnail Path:</label><br>
                            <input type="text" name="invThumbnail" id="invThumbnail" value="/phpmotors/images/no-image.png">
                        </div>
                        <div class="field">
                            <label for="invPrice">Price:</label><br>
                            <input type="text" name="invPrice" id="invPrice">
                        </div>
                        <div class="field">
                            <label for="invStock">Stock:</label><br>
                            <input type="text" name="invStock" id="invStock">
                        </div>
                        <div class="field">
                            <label for="invColor">Color:</label><br>
                            <input type="text" name="invColor" id="invColor">
                        </div>
                        <div class="field">
                            <button class="btn btn--primary" type="submit">Add Vehicle</button>
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