<?php
include "../../DatabaseConnection/databaseConnection.php";

class FlightController
{
    public function uploadCSVFlight($data, $tmp_file)
    {
        // Check if a CSV file is uploaded
        if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] == UPLOAD_ERR_OK) {
            // Temporary file name
            $tmp_file = $_FILES['csvFile']['tmp_name'];

            // Open uploaded CSV file
            $database = new DatabaseConnection();
            $conn = $database->getConn();
            if (($handle = fopen($tmp_file, "r")) !== FALSE) {
                // Skip the first row (headers)
                fgetcsv($handle, 1000, ",");

                // Loop through each row in the CSV file
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Insert data into the database
                    $airline_name = $data[1];
                    $logo = $data[2];
                    $flight_date = $data[3];
                    $flying_from = $data[4];
                    $flying_to = $data[5];
                    $trip_type = $data[6]; // Retrieve trip type from the CSV file
                    $flight_class = $data[7]; // Retrieve flight class from the CSV file
                    $fare_price = $data[8]; // Assuming fare price is in the CSV file

                    // Here you should perform database insertion
                    // Example SQL query:
                    $query = "INSERT INTO flights (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVHotel($data, $tmp_file)
    {
        // Check if a CSV file is uploaded
        if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] == UPLOAD_ERR_OK) {
            // Temporary file name
            $tmp_file = $_FILES['csvFile']['tmp_name'];

            // Open uploaded CSV file
            $database = new DatabaseConnection();
            $conn = $database->getConn();
            if (($handle = fopen($tmp_file, "r")) !== FALSE) {
                // Skip the first row (headers)
                fgetcsv($handle, 1000, ",");

                // Loop through each row in the CSV file
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    // Insert data into the database
                    $city = $data[1];
                    $checkin_date = $data[2];
                    $checkout_date = $data[3];
                    $room_type = $data[4];
                    $guest_name = $data[5];
                    $email = $data[6];
                    $contact_number = $data[7];

                    // Here you should perform database insertion
                    // Example SQL query:
                    $query = "INSERT INTO hotels (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number)
                    VALUES ('$city', '$checkin_date', '$checkout_date', '$room_type', '$guest_name', '$email', '$contact_number')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
}