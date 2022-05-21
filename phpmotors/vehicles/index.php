<?php
require_once '../library/connections.php'; // database connection file
require_once '../model/main-model.php'; // model file for main
require_once '../model/vehicles-model.php'; // model file for vehicles

// Get the array of classifications
$classifications = getClassifications();
require '../common/nav.php';

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
        $classification = filter_input(INPUT_POST, 'classification');
        if(empty($classification)) {
            $message_type = "danger";
            $message = '<p>Please provide information for this empty form field.</p>';
            include '../view/add-classification.php';
            exit; 
        }

        $regOutcome = addClassification($classification);
        if($regOutcome === 1){
            $message_type = "success";
            $message = "<p>Classification saved succesfully.</p>";
        } else {
            $message_type = "danger";
            $message = "<p>Error while saving the classification.</p>";
        }
        $pageTitle = 'Add Vehicle';
        include '../view/vehicles-man.php';
        exit;
        

    case 'add-vehicle':
        $pageTitle = 'Add Vehicle';
        include '../view/add-vehicle.php';
        break;

    case "addVehicleToDatabase":

        $invMake = trim(filter_input(INPUT_POST, 'invMake'));
        $invModel = trim(filter_input(INPUT_POST, 'invModel')); 
        $invDescription = trim(filter_input(INPUT_POST, 'invDescription'));
        $invImage = trim(filter_input(INPUT_POST, 'invImage'));
        $invThumbnail = trim(filter_input(INPUT_POST, 'invThumbnail'));
        $invPrice = trim(filter_input(INPUT_POST, 'invPrice'));
        $invStock = trim(filter_input(INPUT_POST, 'invStock'));
        $invColor = trim(filter_input(INPUT_POST, 'invColor'));
        $classificationId = trim(filter_input(INPUT_POST, 'classificationId'));

        if(empty($invMake) || empty($invModel) || empty($invDescription) || empty($invImage) || empty($invThumbnail) || empty($invPrice) || empty($invStock) || empty($invColor) || empty($classificationId)){
            $message_type = "danger";
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../view/add-vehicle.php';
            exit; 
        }

        $regOutcome = addVehicle($invMake, $invModel, $invDescription, $invImage, $invThumbnail, $invPrice, $invStock, $invColor, $classificationId);
        if($regOutcome === 1){
            $message_type = "success";
            $message = "<p>Vehicle saved succesfully.</p>";
        } else {
            $message_type = "danger";
            $message = "<p>Error while saving the Vehicle.</p>";
        }        
        $pageTitle = 'Add Vehicle';
        include '../view/vehicles-man.php';
        exit;

    default:
        $pageTitle = 'Vehicles Managment';
        include '../view/vehicles-man.php';
        break;
}