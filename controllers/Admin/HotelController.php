<?php
include "../../DatabaseConnection/databaseConnection.php";

class HotelController
{
    public function uploadCSV($data, $tmp_file)
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

