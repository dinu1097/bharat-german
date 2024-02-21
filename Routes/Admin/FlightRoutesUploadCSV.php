

<?php

require_once '../../controllers/Admin/FlightController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tripType = $_POST['tripType'];
    $flightClass = $_POST['flightClass'];
    $tmp_file = $_FILES['csvFile']['tmp_name'];
    $data = $_POST;

    if ($tripType == 'round_trip') {
        if ($flightClass == 'economy') {
            $controller = new FlightController();
            $controller->uploadCSVRoundTripEconomy($data, $tmp_file);
        } elseif ($flightClass == 'premium') {
            $controller = new FlightController();
            $controller->uploadCSVRoundTripPremium($data, $tmp_file);
        } elseif ($flightClass == 'business') {
            $controller = new FlightController();
            $controller->uploadCSVRoundTripBusiness($data, $tmp_file);
        }
    } elseif ($tripType == 'one_way') {
        if ($flightClass == 'economy') {
            $controller = new FlightController();
            $controller->uploadCSVOneWayEconomy($data, $tmp_file);
        } elseif ($flightClass == 'premium') {
            $controller = new FlightController();
            $controller->uploadCSVOneWayPremium($data, $tmp_file);
        } elseif ($flightClass == 'business') {
            $controller = new FlightController();
            $controller->uploadCSVOneWayBusiness($data, $tmp_file);
        }
    }
    

    // Output the search results or perform further actions
    // ...
}



