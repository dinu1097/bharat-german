<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'bharat-german';

// Create a connection
$conn = mysqli_connect($hostname, $username, $password, $database);

$city = 'Tokyo';
$city = mysqli_real_escape_string($conn, $city);

$query = "SELECT * FROM hotels WHERE city LIKE '%$city%'";
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
    echo '<li>' . $hotel['city'] . '</li>';
}
echo '</ul>';

// Close the connection
mysqli_close($conn);
?>
