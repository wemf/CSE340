<?php
require_once '../library/connections.php'; // database connection file
require_once '../model/main-model.php'; // model file for main
require_once '../model/vehicles-model.php'; // model file for vehicles
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
        }

        $regOutcome = addClassification($classification);
        if($regOutcome === 1){
            $_SESSION['message'] = "<p class='success'>Classification saved succesfully.</p>";
        } else {
            $_SESSION['message'] = "<p class='notice'>Error while saving the classification.</p>";
        }
        include '../view/add-classification.php';
        exit;
        

    case 'add-vehicle':
        $pageTitle = 'Add Vehicle';
        include '../view/add-vehicle.php';
        break;

    case "addVehicleToDatabase":
        $pageTitle = 'Add Vehicle';
        
        $invMake = trim(filter_input(INPUT_POST, 'invMake', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invModel = trim(filter_input(INPUT_POST, 'invModel', FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
        $invDescription = trim(filter_input(INPUT_POST, 'invDescription', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invImage = trim(filter_input(INPUT_POST, 'invImage', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $invPrice = trim(filter_input(INPUT_POST, 'invPrice', FILTER_SANITIZE_NUMBER_FLOAT));
        $invStock = trim(filter_input(INPUT_POST, 'invStock', FILTER_SANITIZE_NUMBER_INT));
        $invColor = trim(filter_input(INPUT_POST, 'invColor', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $classificationId = trim(filter_input(INPUT_POST, 'classificationId', FILTER_SANITIZE_NUMBER_INT));
        
        if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)){
            $_SESSION['message'] = '<p class="notice">Please provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit; 
        }

        $regOutcome = addVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);
        if($regOutcome === 1){
            $_SESSION['message'] = "<p class='success'>Vehicle saved succesfully.</p>";
        } else {
            $_SESSION['message'] = "<p class='notice'>Error while saving the Vehicle.</p>";
        }        
        include '../view/add-vehicle.php';
        exit;

    default:
        $pageTitle = 'Vehicles Managment';
        include '../view/vehicles-man.php';
        break;
}