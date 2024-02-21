

<?php

require_once '../../controllers/Admin/FlightController.php';


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

// echo "dinnis";

    $tripType = $_POST['tripType'];
    $flightClass = $_POST['flightClass'];
    // echo $tripType.$flightClass;
    $controller = new FlightController();
    
    if ($tripType == 'round_trip') {
        if ($flightClass == 'economy') {
            $controller->delete_flights_round_trip_economy_table();
        } elseif ($flightClass == 'premium') {
            $controller->delete_flights_round_trip_premium_table();
        } elseif ($flightClass == 'business') {
            $controller->delete_flights_round_trip_business_table();
        }
    } elseif ($tripType == 'one_way') {
        if ($flightClass == 'economy') {
            $controller->delete_flights_one_way_economy_table();
        } elseif ($flightClass == 'premium') {
            $controller->delete_flights_one_way_premium_table();
        } elseif ($flightClass == 'business') {
            $controller->delete_flights_one_way_business_table();
        }
    }
    
    
    
    

    // Output the search results or perform further actions
    // ...
}



