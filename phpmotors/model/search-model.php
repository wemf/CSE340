<?php

function searchvehicles($query) {
    $db = phpmotorsConnect(); 
    $sql = 'SELECT * FROM inventory
    INNER JOIN carclassification ON  carclassification.classificationId = inventory.classificationId
    WHERE CONCAT(invYear, invMake, invModel, invDescription, invColor, invPrice, invMiles, carclassification.classificationName) LIKE :query'; 
    $stmt = $db->prepare($sql); 
    $stmt->bindValue(':query', "%".$query."%", PDO::PARAM_STR_CHAR); 
    $stmt->execute(); 
    $inventory = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    $stmt->closeCursor(); 
    return $inventory; 
}