<?php

function searchVehicles($query, $to = 10, $from = 1) {
    $db = phpmotorsConnect(); 
    $sql = 'SELECT * FROM inventory
    INNER JOIN carclassification ON  carclassification.classificationId = inventory.classificationId
    WHERE CONCAT(invYear, invMake, invModel, invDescription, invColor, invPrice, invMiles, carclassification.classificationName) 
    LIKE :query LIMIT :from, :to'; 
    $stmt = $db->prepare($sql); 
    $stmt->bindValue(':query', "%".$query."%", PDO::PARAM_STR);
    $stmt->bindValue(':from', $from, PDO::PARAM_INT); 
    $stmt->bindValue(':to', $to, PDO::PARAM_INT); 
    $stmt->execute(); 
    $inventory = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    $stmt->closeCursor(); 
    return $inventory; 
}

function searchGetTotalVehicles($query) {
    $db = phpmotorsConnect(); 
    $sql = 'SELECT count(*) FROM inventory
    INNER JOIN carclassification ON  carclassification.classificationId = inventory.classificationId
    WHERE CONCAT(invYear, invMake, invModel, invDescription, invColor, invPrice, invMiles, carclassification.classificationName) 
    LIKE :query LIMIT 1'; 
    $stmt = $db->prepare($sql); 
    $stmt->bindValue(':query', "%".$query."%", PDO::PARAM_STR);
    $stmt->execute(); 
    $total = $stmt->fetchColumn(); 
    $stmt->closeCursor();
    return $total; 
}