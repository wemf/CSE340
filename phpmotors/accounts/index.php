<?php
    // This is the account controller
    
    // Get the database connection file
    require_once '../library/connections.php';
    // Get the PHP Motors model for use as needed
    require_once '../model/main-model.php';
    // Get the accounts model
    require_once '../model/accounts-model.php';
    // Get the array of classifications
	$classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    require '../common/nav.php';

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }

    switch ($action) {
        case 'login-page':
            $pageTitle = 'Account Login';
            include '../view/login.php';
            break;
            
        case 'registration':
            $pageTitle = 'Account Registration';
            include '../view/registration.php'; 
            break;
        
        case 'register':
            $pageTitle = 'Account Registration';
            // Filter and store the data
            $clientFirstname = trim(filter_input(INPUT_POST, 'clientFirstname'));
            $clientLastname = trim(filter_input(INPUT_POST, 'clientLastname'));
            $clientEmail = trim(filter_input(INPUT_POST, 'clientEmail'));
            $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword'));
            // Check for missing data
            if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($clientPassword)){
                $message_type = 'danger';
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/registration.php';
                exit; 
            }
            // Send the data to the model
            $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $clientPassword);
            // Check and report the result
            if($regOutcome === 1){
                $message_type = "success";
                $message = "<p>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
                include '../view/login.php';
                exit;
            } else {
                $message_type = 'danger';
                $message = "<p>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
                include '../view/registration.php';
                exit;
            }
                
        default:
            $pageTitle = 'Home';
            header('Location: ../index.php');
            break;
    } 
?>