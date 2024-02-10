<?php
include "../DatabaseConnection/databaseConnection.php";

class FlightController
{
    public function uploadCSV($data)
    {

            $file = $_FILES["file"]["tmp_name"];
            $handle = fopen($file, "r");

            // Check if file opened successfully
            if ($handle !== FALSE) {
                // Establish database connection
                $database = new DatabaseConnection();
                $conn = $database->getConn();
                // Check database connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Skip the header row
                fgetcsv($handle);

                // Prepare SQL statement for inserting data
                $stmt = $conn->prepare("INSERT INTO flights (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssss", $airline_name, $logo, $flight_date, $flying_from, $flying_to, $trip_type, $flight_class, $fare_price);

                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $airline_name = $data[0];
                    $logo = $data[1];
                    $flight_date = $data[2];
                    $flying_from = $data[3];
                    $flying_to = $data[4];
                    $trip_type = $data[5];
                    $flight_class = $data[6];
                    $fare_price = $data[7];

                    $stmt->execute();
                }

                fclose($handle);
                $conn->close();

                return "CSV data imported successfully";
            } else {
                return "Error: Unable to open file";
            }
 
    }
}


