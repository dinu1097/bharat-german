<?php
// Assuming you have a database connection here
// Include the SearchFunctions class
include '../../controllers/Admin/FlightController.php';
include '../../controllers/Admin/HotelController.php';


// $action = $_POST['action'];
// // echo $action;
// $data = $_POST;
// $tmp_file = $_FILES['csvFile']['tmp_name'];
// $controller = new HotelController();
// $controller->uploadCSV($data, $tmp_file);

echo "welcome";
            $controller = new HotelController();
            $controller->uploadCSV($data, $tmp_file);
// // echo $action; 
// // Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $action = $_POST['action'];
//     // echo $action;
//     $data = $_POST;
//     $tmp_file = $_FILES['csvFile']['tmp_name'];


//     // Handle different actions based on the form submission
//     switch ($action) {
//         case 'flightCSV':

//             // Usage
//             // echo $tmp_file;
//             $controller = new FlightController();
//             $controller->uploadCSV($data, $tmp_file);



//             break;

//         case 'hoteoCSV':

//             $controller = new HotelController();
//             $controller->uploadCSV($data, $tmp_file);

//             break;

//         case 'searchCars':


//             break;

//         default:
//             // Handle unknown action
//             break;
//     }

//     // Output the search results or perform further actions
//     // ...
//     // 
// }
