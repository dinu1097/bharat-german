<?php

require_once '../../controllers/Admin/HotelController.php';

$hotelRating = $_POST['hotelRating'];
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $hotelRating = $_POST['hotelRating'];
    $data = $_POST;

    // Handle different actions based on the form submission
    switch ($hotelRating) {
        case '0-3':
            $controller = new HotelController();
            $controller->insertHotels03($data);
            break;

        case '4':
            $controller = new HotelController();
            $controller->insertHotels4($data);
            break;

        case '5':
            $controller = new HotelController();
            $controller->insertHotels5($data);
            // Handle search cars action
            break;

        default:
            // Handle unknown action
            break;
    }

    // Output the search results or perform further actions
    // ...
}

