<?php
include "../../DatabaseConnection/databaseConnection.php";

class FlightController
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
    public function uploadCSVRoundTripEconomy($data, $tmp_file)
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
                    $query = "INSERT INTO flights_round_trip_economy (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVRoundTripPremium($data, $tmp_file)
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
                    $query = "INSERT INTO flights_round_trip_premium (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVRoundTripBusiness($data, $tmp_file)
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
                    $query = "INSERT INTO flights_round_trip_business (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVOneWayEconomy($data, $tmp_file)
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
                    $query = "INSERT INTO flights_one_way_economy (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVOneWayPremium($data, $tmp_file)
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
                    $query = "INSERT INTO flights_one_way_premium (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    public function uploadCSVOneWayBusiness($data, $tmp_file)
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
                    $query = "INSERT INTO flights_one_way_business (airline_name, logo, flight_date, flying_from, flying_to, trip_type, flight_class, fare_price)
                    VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$trip_type', '$flight_class', '$fare_price')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        }
    }
    // Search function for flights_round_trip_economy
    public function searchRoundTripEconomy()
    {
        echo "round trip economy";
        // Add search functionality for flights_round_trip_economy table here
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM flights_round_trip_economy";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchRoundTripPremium()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $query = "SELECT * FROM flights_round_trip_premium";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchRoundTripBusiness()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $query = "SELECT * FROM flights_round_trip_business";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchOneWayEconomy()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $query = "SELECT * FROM flights_one_way_economy";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchOneWayPremium()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $query = "SELECT * FROM flights_one_way_premium";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchOneWayBusiness()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $query = "SELECT * FROM flights_one_way_business";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        header("Location: ../../views/Admin/Flights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }


    // Function to delete the "flights_one_way_business" table
    public function delete_flights_one_way_business_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_one_way_business";
        if ($conn->query($sql) === TRUE) {
            echo 'welcome';
            header("Location: ../../views/Admin/Flights.php");
            // echo "Table flights_one_way_business deleted successfully";
        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }

    // Function to delete the "flights_one_way_economy" table
    public function delete_flights_one_way_economy_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_one_way_economy";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../views/Admin/Flights.php");

        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }

    // Function to delete the "flights_one_way_premium" table
    public function delete_flights_one_way_premium_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_one_way_premium";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../views/Admin/Flights.php");

        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }

    // Function to delete the "flights_round_trip_business" table
    public function delete_flights_round_trip_business_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_round_trip_business";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../views/Admin/Flights.php");

        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }

    // Function to delete the "flights_round_trip_economy" table
    public function delete_flights_round_trip_economy_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_round_trip_economy";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../views/Admin/Flights.php");

        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }

    // Function to delete the "flights_round_trip_premium" table
    public function delete_flights_round_trip_premium_table()
    {
        // Database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        // SQL to delete table
        $sql = "DELETE FROM flights_round_trip_premium";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../../views/Admin/Flights.php");

        } else {
            echo "Error deleting table: " . $conn->error;
        }
        $conn->close();
    }


    function insertFlightsOneWayBusiness($data)
    {
        // Extract data from $data array
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_one_way_business (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }
    function insertFlightsOneWayEconomy($data)
    {
        // Your code for inserting data into the flights_one_way_economy table goes here
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_one_way_economy (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }

    function insertFlightsOneWayPremium($data)
    {
        // Your code for inserting data into the flights_one_way_premium table goes here
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_one_way_premium (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }

    function insertFlightsRoundTripBusiness($data)
    {
        // Your code for inserting data into the flights_round_trip_business table goes here
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_round_trip_business (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }

    function insertFlightsRoundTripEconomy($data)
    {
        // Your code for inserting data into the flights_round_trip_economy table goes here
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_round_trip_economy (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }

    function insertFlightsRoundTripPremium($data)
    {
        // Your code for inserting data into the flights_round_trip_premium table goes here
        $airline_name = $data['airline_name'];
        $logo = $data['logo'];
        $flight_date = $data['flight_date'];
        $flying_from = $data['flying_from'];
        $flying_to = $data['flying_to'];
        $fare_price = $data['fare_price'];
        $trip_type = $data['trip_type'];
        $flight_class = $data['flight_class'];

        // Sanitize data if necessary
        // (make sure to sanitize input to prevent SQL injection)

        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // Construct the SQL query
        $query = "INSERT INTO flights_round_trip_premium (airline_name, logo, flight_date, flying_from, flying_to, fare_price, trip_type, flight_class)
              VALUES ('$airline_name', '$logo', '$flight_date', '$flying_from', '$flying_to', '$fare_price', '$trip_type', '$flight_class')";

        // Execute the query
        if ($conn->query($query) === TRUE) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Flights.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }

        // Close the connection
        $conn->close();
    }

}