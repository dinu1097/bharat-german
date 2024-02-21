<?php
session_start();
// Assuming you have a database connection here
// Include the SearchFunctions class
include '../controllers/SearchFunctionController.php';


// Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$postData = isset($_GET['postData']) ? json_decode(urldecode($_GET['postData']), true) : [];

$action = $postData['action'];

$tripType = $postData['triptype'];
$flightClass = $postData['class'];

// echo $postData['hotelratings'];
// Handle different actions based on the form submission
switch ($action) {
    case 'searchHotels':

        $city = $postData['hotel-city'] ?? '';
        $hotelRating = $postData['hotelratings'];

        $searchFunctions = new SearchFunctions();
        // Handle different actions based on the form submission
        switch ($hotelRating) {
            case '0-3':
                $searchFunctions->searchHotels03($city);
                break;

            case '4':
                // $controller = new HotelController();
                $searchFunctions->searchHotels4($city);
                break;

            case '5':
                // $controller = new HotelController();
                $searchFunctions->searchHotels5($city);
                // Handle search cars action
                break;

            default:
                // Handle unknown action
                break;
        }



        break;

    case 'searchFlights':
        // echo $postData['to'];
        $from = $postData['from'] ?? '';
        $to = $postData['to'] ?? '';
        // $results = $searchFunctions->searchFlights($from, $to);

        // Handle flight search results as needed
        if ($tripType == 'round_trip') {
            // $controller = new FlightController();
            $searchFunctions = new SearchFunctions();

            if ($flightClass == 'economy') {
                $searchFunctions->searchRoundTripEconomy($from, $to);
            } elseif ($flightClass == 'premium') {
                $searchFunctions->searchRoundTripPremium($from, $to);
            } elseif ($flightClass == 'business') {
                $searchFunctions->searchRoundTripBusiness($from, $to);
            }
        } elseif ($tripType == 'one_way') {
            // $controller = new FlightController();
            $searchFunctions = new SearchFunctions();

            if ($flightClass == 'economy') {
                $searchFunctions->searchOneWayEconomy($from, $to);
            } elseif ($flightClass == 'premium') {
                $searchFunctions->searchOneWayPremium($from, $to);
            } elseif ($flightClass == 'business') {
                $searchFunctions->searchOneWayBusiness($from, $to);
            }
        }


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



