<?php
// Assuming you have a database connection here
// Include the SearchFunctions class
include '../controllers/FlightController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $data = $_POST;
    // Create an instance of the SearchFunctions class
    $searchFunctions = new SearchFunctions();

    // Handle different actions based on the form submission
    switch ($action) {
        case 'flightCSV':

            // Usage
            $controller = new FlightController();
            $controller->uploadCSV($data);



            break;

        case 'searchFlights':



            break;

        case 'searchCars':


            break;

        default:
            // Handle unknown action
            break;
    }

    // Output the search results or perform further actions
    // ...
    // 
}
?>