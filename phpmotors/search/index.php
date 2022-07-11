<?php
session_start();
require_once '../library/connections.php';
require_once '../model/main-model.php';
require_once '../model/vehicles-model.php';
require_once '../model/search-model.php';
require_once '../library/functions.php';

// Get the array of classifications
$classifications = getClassifications();
// Build a navigation bar using the $classifications array
$navList = buildNav($classifications);

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

switch ($action) {
    case 'q':
        $query = filter_input(INPUT_GET, 'query', FILTER_SANITIZE_STRING);
        $results = $results_count = 0;
        if (empty($query)) {
            $_SESSION['message'] = "<p class='notice'>You must provide a search string.</p>";
            include '../view/search-page.php';
            exit;
        }
        $results = searchvehicles($query);
        $results_count = count($results);
        include '../view/search-page.php';
        break;
    default:
        include '../view/search-page.php';
        exit;
 
 break;
}