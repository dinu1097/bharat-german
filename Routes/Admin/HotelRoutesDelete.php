<?php

require_once '../../controllers/Admin/HotelController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $hotelRating = $_POST['hotelRating'];


    // Handle different actions based on the form submission
    switch ($hotelRating) {
        case '0-3':
            $controller = new HotelController();
            $controller->deleteHotels03();
            break;

        case '4':
            $controller = new HotelController();
            $controller->deleteHotels4();
            break;

        case '5':
            $controller = new HotelController();
            $controller->deleteHotels5();
            // Handle search cars action
            break;

        default:
            // Handle unknown action
            break;
    }

    // Output the search results or perform further actions
    // ...
}

