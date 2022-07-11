<?php
require_once '../library/connections.php'; // database connection file
require_once '../model/main-model.php'; // model file for main
require_once '../model/vehicles-model.php'; // model file for vehicles
require_once '../model/uploads-model.php'; // model file for uploads
require_once '../library/functions.php'; 
//Create or access a Session
session_start();

$classifications = getClassifications();
$navList = buildNav($classifications);

if(isset($_COOKIE['firstname'])){
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
} 

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'add-classification':
        $pageTitle = 'Add Classification';
        include '../view/add-classification.php';
        break;

    case 'addClassification':
        $pageTitle = 'Add Classification';
        $classification = trim(filter_input(INPUT_POST, 'classification', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        if(empty($classification)) {
            $_SESSION['message'] = '<p class="notice">Please provide information for this empty form field.</p>';
            include '../view/add-classification.php';
            exit;
            break;
        }

        $regOutcome = addClassification($classification);
        if($regOutcome === 1){
            $_SESSION['message'] = "<p class='success'>Classification saved succesfully.</p>";
        } else {
            $_SESSION['message'] = "<p class='notice'>Error while saving the classification.</p>";
        }
        include '../view/add-classification.php';
        exit;
        break;

    case 'add-vehicle':
        $pageTitle = 'Add Vehicle';
        include '../view/add-vehicle.php';
        break;

    case 'addVehicleToDatabase':
        $pageTitle = 'Add Vehicle';
        
        $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
        $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invYear = trim(filter_input(INPUT_POST, 'invYear', FILTER_SANITIZE_NUMBER_FLOAT));
        $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT));
        $invMiles = trim(filter_input(INPUT_POST, 'invMiles', FILTER_SANITIZE_NUMBER_INT));
        $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $classificationId = trim(filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_NUMBER_INT));
        
        if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invYear) || empty($invPrice) || empty($invMiles) || empty($invColor) || empty($classificationId)){
            $_SESSION['message'] = '<p class="notice">Please provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit;
            break;
        }

        $regOutcome = addVehicle($invYear, $invMake, $invModel, $invDescription, $invPrice, $invMiles, $invColor, $classificationId);
        if($regOutcome === 1){
            $_SESSION['message'] = "<p class='success'>Vehicle saved succesfully.</p>";
        } else {
            $_SESSION['message'] = "<p class='notice'>Error while saving the Vehicle.</p>";
        }        
        include '../view/add-vehicle.php';
        exit;
        break;
    
    case 'getInventoryItems': 
        // Get the classificationId 
        $classificationId = filter_input(INPUT_GET, 'classificationId', FILTER_SANITIZE_NUMBER_INT); 
        // Fetch the vehicles by classificationId from the DB 
        $inventoryArray = getInventoryByClassification($classificationId); 
        // Convert the array to a JSON object and send it back 
        echo json_encode($inventoryArray); 
        break;
    
    case 'updateVehicle':
        $pageTitle = 'Update Vehicle';

        $classificationId = filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_NUMBER_INT);
        $invMake = filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invModel = filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invDescription = filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invYear = filter_input(INPUT_POST, 'invYear', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invPrice = filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $invMiles = filter_input(INPUT_POST, 'invMiles', FILTER_SANITIZE_NUMBER_INT);
        $invColor = filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        if (empty($classificationId) || empty($invMake) || empty($invModel) || empty($invDescription) || empty($invYear) || empty($invPrice) || empty($invMiles) || empty($invColor) || empty($invId)) {
            $_SESSION['message'] = '<p class="notice">Please complete all information for the new item! Double check the classification of the item.</p>';
            include '../view/new-item.php';
            exit;
        }
        $updateResult = updateVehicle($invId, $invYear, $invMake, $invModel, $invDescription, $invPrice, $invMiles, $invColor, $classificationId);
        if ($updateResult) {
            $_SESSION['message'] = "<p class='success'>Congratulations the $Make $Model was successfully updated.</p>";
            header('location: /phpmotors/vehicles/');
            exit;
        } else {
            $_SESSION['message'] = "<p class='notice'>Error. The new vehicle was not Edited.</p>";
            $carClassifications = $classifications;
            include '../view/vehicle-update.php';
            exit;
        }
        break;

    case 'mod':
        $invId = filter_input(INPUT_GET, 'invId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invInfo = getVehicleById($invId);
        if(count($invInfo)<1){
            $_SESSION['message'] = 'Sorry, no vehicle information could be found.';
        }
        $carClassifications = $classifications;
        include '../view/vehicle-update.php';
        exit;
        break;
    case 'del':
        $invId = filter_input(INPUT_GET, 'invId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invInfo = getVehicleById($invId);
        if (count($invInfo) < 1) {
            $_SESSION['message'] = 'Sorry, no vehicle information could be found.';
        }
        include '../view/vehicle-delete.php';
        exit;
        break;
    case 'deleteVehicle':
        $invMake = filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invModel = filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invId = filter_input(INPUT_POST, 'invId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        $deleteResult = deleteVehicle($invId);
        if ($deleteResult) {
            $_SESSION['message'] = "<p class='success'>Congratulations the $invMake $invModel was successfully deleted.</p>";
            header('location: /phpmotors/vehicles/');
            exit;
        } else {
            $_SESSION['message'] = "<p class='notice'>Error: $invMake $invModel was not deleted.</p>";
            header('location: /phpmotors/vehicles/');
            exit;
        }
        break;

    case 'classification':
        $classificationName = filter_input(INPUT_GET, 'classificationName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $vehicles = getVehiclesByClassification($classificationName);
        if(!count($vehicles)){
            $_SESSION['message'] = "<p class='notice'>Sorry, no $classificationName could be found.</p>";
        } else {
            $vehicleDisplay = buildVehiclesDisplay($vehicles);
        }
        include '../view/classification.php';
        break;
    
    case 'getVehicleInfo':
        $invId = filter_input(INPUT_GET, 'invId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $invInfo = getVehicleById($invId);
        if(!$invInfo) {
            $_SESSION['message'] = "<h2 class='notice'>Vehicle could not be found.</h2>";
            http_response_code(404);
            include '../view/404.php';
            exit;
        }
        $thumbnailById = getThumbnailById($invId);
        $vehicleThumbnailDisplay = buildThumbnailDisplay($thumbnailById);
        include '../view/vehicle-info.php';
        break;
           
    default:
        $pageTitle = 'Vehicles Managment';
        $classificationList = buildClassificationList($classifications);
        include '../view/vehicles-man.php';
        break;
}