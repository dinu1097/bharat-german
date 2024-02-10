<?php
session_start();
// Assuming you have a database connection here
// Include the SearchFunctions class
include '../controllers/SearchFunctionController.php';


// Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = $_SESSION['post_data'];
    $action = $postData['action'];

    // Create an instance of the SearchFunctions class
    $searchFunctions = new SearchFunctions();

    // Handle different actions based on the form submission
    switch ($action) {
        case 'searchHotels':

            $city = $postData['hotel-city'] ?? '';
            $results = $searchFunctions->searchHotels($city);
            // Handle hotel search results as needed
            


            break;

        case 'searchFlights':
            echo 'welcome';
            $from = $postData['from'] ?? '';
            $to = $postData['to'] ?? '';
            $results = $searchFunctions->searchFlights($from, $to);
            // Handle flight search results as needed
            
            break;

        case 'searchCars':
            
            $from = $postData['from'] ?? '';
            $to = $postData['to'] ?? '';
            $results = $searchFunctions->searchCars($from, $to);
            // Handle car search results as needed
            
            break;

        default:
            // Handle unknown action
            break;
    }

    // Output the search results or perform further actions
    // ...
    // 
// }
?>


