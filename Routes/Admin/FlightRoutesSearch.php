<?php

require_once '../../controllers/Admin/FlightController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tripType = $_POST['tripType'];
    $flightClass = $_POST['flightClass'];
    // echo $tripType.'dinnis';

    if ($tripType == 'round_trip') {
        if ($flightClass == 'economy') {
            $controller = new FlightController();
            $controller->searchRoundTripEconomy();
        } elseif ($flightClass == 'premium') {
            $controller = new FlightController();
            $controller->searchRoundTripPremium();
        } elseif ($flightClass == 'business') {
            $controller = new FlightController();
            $controller->searchRoundTripBusiness();
        }
    } elseif ($tripType == 'one_way') {
        if ($flightClass == 'economy') {
            $controller = new FlightController();
            $controller->searchOneWayEconomy();
        } elseif ($flightClass == 'premium') {
            $controller = new FlightController();
            $controller->searchOneWayPremium();
        } elseif ($flightClass == 'business') {
            $controller = new FlightController();
            $controller->searchOneWayBusiness();
        }
    }
    

    // Output the search results or perform further actions
    // ...
}

