<?php

require_once '../../controllers/Admin/FlightController.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tripType = $_POST['trip_type'];
    $flightClass = $_POST['flight_class'];
    $tmp_file = $_FILES['csvFile']['tmp_name'];
    $data = $_POST;

    // Create an instance of FlightController
    $controller = new FlightController();
    $controller->insertFlights($data);
    // $controller->insertFlightsOneWayBusiness($data);

    // Determine which insert function to call based on tripType and flightClass
    // if ($tripType == 'round_trip') {
    //     if ($flightClass == 'economy') {
    //         $controller->insertFlightsRoundTripEconomy($data);
    //     } elseif ($flightClass == 'premium') {
    //         $controller->insertFlightsRoundTripPremium($data);
    //     } elseif ($flightClass == 'business') {
    //         $controller->insertFlightsRoundTripBusiness($data);
    //     }
    // } elseif ($tripType == 'one_way') {
    //     if ($flightClass == 'economy') {
    //         $controller->insertFlightsOneWayEconomy($data);
    //     } elseif ($flightClass == 'premium') {
    //         $controller->insertFlightsOneWayPremium($data);
    //     } elseif ($flightClass == 'business') {
    //         $controller->insertFlightsOneWayBusiness($data);
    //     }
    // }
}

// Output the search results or perform further actions
// ...
?>
