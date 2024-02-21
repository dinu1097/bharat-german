<?php
include "../../DatabaseConnection/databaseConnection.php";

class HotelController
{
    public function uploadCSV03($data, $tmp_file)
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
                    $query = "INSERT INTO hotel_0_3_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number)
                    VALUES ('$city', '$checkin_date', '$checkout_date', '$room_type', '$guest_name', '$email', '$contact_number')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        } else {
            echo "unable to upload";
        }
    }
    public function uploadCSV4($data, $tmp_file)
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
                    $query = "INSERT INTO hotel_4_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number)
                    VALUES ('$city', '$checkin_date', '$checkout_date', '$room_type', '$guest_name', '$email', '$contact_number')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        } else {
            echo "unable to upload";
        }
    }
    public function uploadCSV5($data, $tmp_file)
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
                    $query = "INSERT INTO hotel_5_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number)
                    VALUES ('$city', '$checkin_date', '$checkout_date', '$room_type', '$guest_name', '$email', '$contact_number')";
                    mysqli_query($conn, $query);
                }
                fclose($handle);
            }
        } else {
            echo "unable to upload";
        }
    }
    public function searchHotels03()
    {

        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);
    
        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_0_3_star";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    
        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    
        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../../views/Admin/Hotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }
    public function searchHotels4()
    {

        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);
    
        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_4_star";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    
        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    
        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../../views/Admin/Hotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }
    public function searchHotels5()
    {

        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);
    
        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_5_star";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    
        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    
        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../../views/Admin/Hotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }
    public function deleteHotels03()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        $query = "DELETE FROM `hotel_0_3_star`";
        mysqli_query($conn, $query);
        header("Location: ../../views/Admin/Hotels.php");
        
    }
    public function deleteHotels4()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        $query = "DELETE FROM `hotel_4_star`";
        mysqli_query($conn, $query);
        header("Location: ../../views/Admin/Hotels.php");
        
    }
    public function deleteHotels5()
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        $query = "DELETE FROM `hotel_5_star`";
        mysqli_query($conn, $query);
        header("Location: ../../views/Admin/Hotels.php");
    }
    function insertHotels03($data) {
        $city = $data['City'];
        $checkin_date = $data['checkInDate'];
        $checkout_date = $data['checkOutDate'];
        $room_type = $data['room_type'];
        $guest_name = $data['guest_name'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $ratings = $_POST['hotelRating']; // Additional ratings field
    
        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // Prepare and execute the SQL query using prepared statements
        $query = "INSERT INTO hotel_0_3_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number, ratings)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssi", $city, $checkin_date, $checkout_date, $room_type, $guest_name, $email, $contact_number, $ratings);
        $stmt->execute();
    
        // Check for errors during the query execution
        if ($stmt->affected_rows > 0) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Hotels.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    
    function insertHotels4($data) {
        $city = $data['City'];
        $checkin_date = $data['checkInDate'];
        $checkout_date = $data['checkOutDate'];
        $room_type = $data['room_type'];
        $guest_name = $data['guest_name'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $ratings = $_POST['hotelRating']; // Additional ratings field
    
        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // Prepare and execute the SQL query using prepared statements
        $query = "INSERT INTO hotel_4_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number, ratings)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssi", $city, $checkin_date, $checkout_date, $room_type, $guest_name, $email, $contact_number, $ratings);
        $stmt->execute();
    
        // Check for errors during the query execution
        if ($stmt->affected_rows > 0) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Hotels.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    
    function insertHotels5($data) {
        $city = $data['City'];
        $checkin_date = $data['checkInDate'];
        $checkout_date = $data['checkOutDate'];
        $room_type = $data['room_type'];
        $guest_name = $data['guest_name'];
        $email = $data['email'];
        $contact_number = $data['contact_number'];
        $ratings = $_POST['hotelRating']; // Additional ratings field
    
        // Create database connection
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // Prepare and execute the SQL query using prepared statements
        $query = "INSERT INTO hotel_5_star (city, checkin_date, checkout_date, room_type, guest_name, email, contact_number, ratings)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssi", $city, $checkin_date, $checkout_date, $room_type, $guest_name, $email, $contact_number, $ratings);
        $stmt->execute();
    
        // Check for errors during the query execution
        if ($stmt->affected_rows > 0) {
            // Redirect to a success page
            header("Location: ../../views/Admin/Hotels.php");
            exit(); // Exit to prevent further execution
        } else {
            // Handle the case when the query fails
            echo "Error: " . $conn->error;
        }
    
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    
}

