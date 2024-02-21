<?php
include "../DatabaseConnection/databaseConnection.php";

class SearchFunctions
{
    public function searchHotels($city)
    {
        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel WHERE city LIKE '%$city%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../views/searchResultsHotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }

    public function searchHotels03($city)
    {
        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_0_3_star WHERE city LIKE '%$city%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../views/searchResultsHotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }
    public function searchHotels4($city)
    {
        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_4_star WHERE city LIKE '%$city%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../views/searchResultsHotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
    }
    public function searchHotels5($city)
    {
        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "London";
        // $to = "Paris";
        $query = "SELECT * FROM hotel_5_star WHERE city LIKE '%$city%'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $results = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }

        // Redirect to searchResultsFlights.php with results as URL parameter
        header("Location: ../views/searchResultsHotels.php?results=" . urlencode(json_encode($results)));
        mysqli_free_result($result);
        exit();
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

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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
    public function searchRoundTripEconomy($from, $to)
    {
        // Logic for searching round trip economy flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_round_trip_economy` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

    public function searchRoundTripPremium($from, $to)
    {
        // Logic for searching round trip premium flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_round_trip_premium` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

    public function searchRoundTripBusiness($from, $to)
    {
        // Logic for searching round trip business flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_round_trip_business` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

    public function searchOneWayEconomy($from, $to)
    {
        // Logic for searching one-way economy flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_one_way_economy` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

    public function searchOneWayPremium($from, $to)
    {
        // Logic for searching one-way premium flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_one_way_premium` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

    public function searchOneWayBusiness($from, $to)
    {
        // Logic for searching one-way business flights from $from to $to


        // Proceed with the normal code (database query and redirection)
        $database = new DatabaseConnection();
        $conn = $database->getConn();

        // $from = mysqli_real_escape_string($conn, $from);
        // $to = mysqli_real_escape_string($conn, $to);

        // $from = "New York";
        // $to = "Los Angeles";
        $query = "SELECT * FROM `flights_one_way_business` WHERE `flying_from` LIKE '%$from%' AND `flying_to` LIKE '%$to%' ORDER BY `airline_name`";
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

}

