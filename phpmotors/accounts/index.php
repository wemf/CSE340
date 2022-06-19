<?php
    // This is the account controller
    
    //Create or access a Session
    session_start();
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

    if(isset($_COOKIE['firstname'])){
        $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } 

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
            $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $clientEmail = checkEmail($clientEmail);
            $passwordCheck = checkPassword($clientPassword);
            // Run basic checks, return if errors
            if (empty($clientEmail) || empty($passwordCheck)) {
                $_SESSION['message'] = '<p class="notice">Please provide a valid email address and password.</p>';
                include '../view/login.php';
                exit;
            }
            // A valid password exists, proceed with the login process
            // Query the client data based on the email address
            $clientData = getClient($clientEmail);
            if(!$clientData){
                $_SESSION['message'] = '<p class="notice">Please provide a valid email address and password.</p>';
                include '../view/login.php';
                exit;
            }
            // Compare the password just submitted against
            // the hashed password for the matching client
            $hashCheck = password_verify($clientPassword, $clientData['clientPassword']);
            // If the hashes don't match create an error
            // and return to the login view
            if(!$hashCheck) {
                $_SESSION['message'] = '<p class="notice">Please check your password and try again.</p>';
                include '../view/login.php';
                exit;
            }
            // A valid user exists, log them in
            $_SESSION['loggedin'] = TRUE;
            // Remove the password from the array
            // the array_pop function removes the last
            // element from an array
            array_pop($clientData);
            // Store the array into the session
            $_SESSION['clientData'] = $clientData;
            // Send them to the admin view
            include '../view/admin.php';
            exit;
        
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
                $_SESSION['message'] = '<p class="notice">Please provide information for all empty form fields.</p>';
                include '../view/registration.php';
                exit; 
            }
            // checking for existing email address
            $existingEmail = checkExistingEmail($clientEmail);
            // Check for existing email in the table
            if($existingEmail){
                $_SESSION['message'] = "<p class='notice'>That email address already exists. Would you like to signin instead?</p>";
                include '../view/login.php';
                exit;
            }
            // Hash the checked password
            $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
            // Send the data to the model
            $regOutcome = regClient($clientFirstname, $clientLastname, $clientEmail, $hashedPassword);
            // Check and report the result
            if($regOutcome === 1){
                setcookie('firstname', $clientFirstname, strtotime('+1 year'), '/');
                $_SESSION['message'] = "<p class='success'>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
                header('Location: /phpmotors/accounts/?action=login-page');
                break;
            } else {
                $_SESSION['message'] = "<p class='notice'>Sorry $clientFirstname, but the registration failed. Please try again.</p>";
                include '../view/registration.php';
                break;
            }

        case 'logout':
            session_destroy();
            header('Location: /phpmotors/accounts/?action=login-page');
            exit;
            break;
                
        case 'update':
            $pageTitle = 'Manage Account';
            $clientInfo = getClient($_SESSION['clientData']['clientEmail']);
            $clientId = $_SESSION['clientData']['clientId'];
            include '../view/client-update.php';
            break;

        case 'updateAccount':
            $pageTitle = 'Manage Account';
            $clientInfo = getClient($_SESSION['clientData']['clientEmail']);
            $clientId = filter_input(INPUT_POST, 'clientId',FILTER_SANITIZE_NUMBER_INT);
            $clientFirstname = filter_input(INPUT_POST, 'clientFirstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $clientLastname = filter_input(INPUT_POST, 'clientLastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $clientEmail = filter_input(INPUT_POST, 'clientEmail', FILTER_SANITIZE_EMAIL);
            $clientEmail = checkEmail($clientEmail);
            $emailCheck = checkExistingEmail($clientEmail);
            if (empty($clientFirstname) || empty($clientLastname) || empty($clientEmail)) {
                $_SESSION['message'] = '<p class="notice">Please provide information for all empty form fields</p>';
                include '../view/client-update.php';
                exit;
            }
            if ($emailCheck && $clientEmail != $_SESSION['clientData']['clientEmail']) {
                $_SESSION['message'] = '<p class="notice">Email already exists. Please choose a different email.</p>';
                include '../view/client-update.php';
                exit;
            }
            $updateResult = updateClient($clientFirstname,$clientLastname,$clientEmail,$clientId);
            if ($updateResult) {
                $_SESSION['message'] = "<p class='success'>$clientFirstname, your account has been successfully updated.</p>";
                $clientData = getClientById($clientId);
                // UPDATE USER SESSION
                array_pop($clientData);
                $_SESSION['clientData'] = $clientData;
                header('Location: /phpmotors/accounts/');
                exit;
            } else {
                $_SESSION['message'] = "<p class='notice'>Sorry $clientFirstname, account failed to update.</p>";
                include '../view/client-update.php';
                exit;
            }
            break;

        case 'updatePassword':
            $pageTitle = 'Manage Account';
            $clientInfo = getClient($_SESSION['clientData']['clientEmail']);
            $clientFirstname = $_SESSION['clientData']['clientFirstname'];
            $clientId = filter_input(INPUT_POST, 'clientId',FILTER_SANITIZE_NUMBER_INT);
            $clientPassword = filter_input(INPUT_POST, 'clientPassword', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $checkPassword = checkPassword($clientPassword);
            if (empty($checkPassword)) {
            $_SESSION['message'] = '<p class="notice">Invalid Password.</p>';
                include '../view/client-update.php';
                exit;
            }
            $hashedPassword = password_hash($clientPassword, PASSWORD_DEFAULT);
            $updatePassOutcome = updatePassword($hashedPassword,$clientId);
            if ($updatePassOutcome === 1) {
                $_SESSION['message'] = "<p class='success'>Password succesfully changed!</p>";
                $clientData = getClientById($clientId);
                array_pop($clientData);
                $_SESSION['clientData'] = $clientData;
                header('Location: /phpmotors/accounts/');
                exit;
            } else {
                $_SESSION['message'] = "<p class='notice'>Sorry $clientFirstname, but the update failed. Please try again.</p>";
                include '../view/client-update.php';
                exit;
            }
            break;

        default:
            $pageTitle = 'Home';
            include '../view/admin.php';
            break;
    } 
?>