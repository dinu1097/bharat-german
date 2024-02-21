<?php

require_once '../../controllers/Admin/HotelController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $data = $_POST;
    $hotelRating = $_POST['hotelRating'];
    $tmp_file = $_FILES['csvFile']['tmp_name'];

    // Handle different actions based on the form submission
    switch ($hotelRating) {
        case '0-3':
            $controller = new HotelController();
            $controller->searchHotels03($data, $tmp_file);
            break;

        case '4':
            $controller = new HotelController();
            $controller->uploadCSV4($data, $tmp_file);
            break;

        case '5':
            $controller = new HotelController();
            $controller->uploadCSV5($data, $tmp_file);
            // Handle search cars action
            break;

        default:
            // Handle unknown action
            break;
    }

    // Output the search results or perform further actions
    // ...
}

