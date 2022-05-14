<?php
    // This is the main controller

    // Get the database connection file
    require_once 'library/connections.php';
    // Get the PHP Motors model for use as needed
    require_once 'model/main-model.php';
    // Get the array of classifications
	$classifications = getClassifications();

    // Build a navigation bar using the $classifications array
    require 'common/nav.php';

    //nav list check
    // echo $navList;
    // exit;

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
    }
    switch ($action) {
        case 'template':
            include 'view/template.php';
            break;
        default:
            $pageTitle = 'Home';
            include 'view/home.php';
            break;
    }
?>