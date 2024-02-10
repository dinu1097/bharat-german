<?php
include "../DatabaseConnection/databaseConnection.php";

class SearchFunctions
{
    public function searchHotels($city)
    {

        $database = new DatabaseConnection();
        $conn = $database->getConn();

        $city = mysqli_real_escape_string($conn, $city);

        $query = "SELECT * FROM hotels WHERE hotel_name LIKE '%$city%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        mysqli_free_result($result);

        // Display results in HTML list
        echo '<ul>';
        foreach ($results as $hotel) {
            echo '<li>' . $hotel['hotel_name'] . '</li>';
        }
        echo '</ul>';

        // Close the connection
        mysqli_close($conn);
    }

   public function searching()
   {
    header("Location: ../views/searchResultsFlights.php");  

   }
    

    public function searchFlights($from, $to)
    {

    
        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();
    
        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);
    
        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM flights WHERE flying_from LIKE '%$from%' AND flying_to LIKE '%$to%'";
        $result = mysqli_query($conn, $query);
    
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
    
        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
    
        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../views/searchResultsFlights.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }



    public function searchCars($from, $to)
    {
        $database = new DatabaseConnection();
        $conn = $database->getConn();
        $from = mysqli_real_escape_string($conn, $from);
        $to = mysqli_real_escape_string($conn, $to);

        $query = "SELECT * FROM cars WHERE departure_location LIKE '%$from%' AND destination LIKE '%$to%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        mysqli_free_result($result);
        return $results;
        // $query = "SELECT * FROM cars WHERE departure_location LIKE :from AND destination LIKE :to";
        // $stmt = $db->prepare($query);
        // $stmt->bindValue(':from', '%' . $from . '%', PDO::PARAM_STR);
        // $stmt->bindValue(':to', '%' . $to . '%', PDO::PARAM_STR);
        // $stmt->execute();

        // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // // Redirect to the view page with search results as URL parameters
        // $queryString = http_build_query(['results' => $results]);
        // header("Location: searchResults.php?$queryString");
        // exit();
    }
}

