<?php

// Add a new car classification
function addClassification($classification){
    // Create a connection object using the phpmotors connection function
    $db = phpmotorsConnect();
    // The SQL statement
    $sql = 'INSERT INTO carclassification (classificationName)
    VALUES (:classification)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':classification', $classification, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}

// Add a new vehicle
function addVehicle($Make, $Model, $Description, $ImagePath, $Thumbnail, $Price, $Stock, $Color, $classificationId) {
    // Create a connection object using the phpmotors connection function
    $db = phpmotorsConnect();
    // The SQL statement
    $sql = 'INSERT INTO inventory (invMake, invModel, invDescription, invImage, invThumbnail, invPrice, invStock, invColor, classificationId)
    VALUES (:Make, :Model, :Description, :ImagePath, :Thumbnail, :Price, :Stock, :Color, :classificationId)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next seven lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':Make', $Make, PDO::PARAM_STR);
    $stmt->bindValue(':Model', $Model, PDO::PARAM_STR);
    $stmt->bindValue(':Description', $Description, PDO::PARAM_STR);
    $stmt->bindValue(':ImagePath', $ImagePath, PDO::PARAM_STR);
    $stmt->bindValue(':Thumbnail', $Thumbnail, PDO::PARAM_STR);
    $stmt->bindValue(':Price', $Price, PDO::PARAM_STR);
    $stmt->bindValue(':Stock', $Stock, PDO::PARAM_STR);
    $stmt->bindValue(':Color', $Color, PDO::PARAM_STR);
    $stmt->bindValue(':classificationId', $classificationId, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
}



