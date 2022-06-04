<?php
    // This is the account controller
    
    // Get the database connection file
    require_once '../library/connections.php';
    // Get the PHP Motors model for use as needed
    require_once '../model/main-model.php';
    // Get the accounts model
    require_once '../model/accounts-model.php';
    // Get the functions library
    require_once '../library/functions.php';
    // Get the array of classifications
	$classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    $navList = buildNav($classifications);

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }

    switch ($action) {
        case 'login-page':
            $pageTitle = 'Account Login';
            include '../view/login.php';
            break;

        case 'Login':
            $pageTitle = 'Account Login';
            $clientEmail = trim(filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL));
            $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $clientEmail = checkEmail($clientEmail);
            $checkPassword = checkPassword($clientPassword);
            if(empty($clientEmail) || empty($checkPassword)){
                $message_type = 'danger';
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/login.php';
                exit; 
            } else {
                // TODO Validate if credentials are correct (not required this week)
                $message_type = 'success';
                $message = '<p>Login successfully.</p>';
                include '../view/login.php';
                exit; 
            }
            break;
        
        case 'registration':
            $pageTitle = 'Account Registration';
            include '../view/registration.php'; 
            break;
        
        case 'register':
            $pageTitle = 'Account Registration';
            // Filter and store the data
            $clientFirstname = trim(filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $clientLastname = trim(filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $clientEmail = trim(filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL));
            $clientPassword = trim(filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

            $clientEmail = checkEmail($clientEmail);
            $checkPassword = checkPassword($clientPassword);
            // Check for missing data
            if(empty($clientFirstname) || empty($clientLastname) || empty($clientEmail) || empty($checkPassword)){
                $message_type = 'danger';
                $message = '<p>Please provide information for all empty form fields.</p>';
                include '../view/registration.php';
                exit; 
            }
            // Hash the checked password
            $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
            // Send the data to the model
            $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
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