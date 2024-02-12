<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include "nav.php"; ?>

    <!-- Your content goes here -->
    <div class="container mt-5">

        <div class="row mb-5">
            <div class="col-sm-6">
                <h2>Flight Information</h2>
                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addHotelModal">Add
                    Hotel</button>
                <button type="button" class="btn btn-danger mb-5" data-toggle="modal"
                    data-target="#addHotelModal">Delete
                    All
                    Hotel Data</button>
            </div>
            <div class="col-sm-6">
                <h2>Upload CSV</h2>
                <form action="../../Routes/Admin/AdminRoutes.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="csvFile">Select CSV File</label>
                        <input type="file" class="form-control-file" id="csvFile" name="csvFile">
                    </div>
                    <div class="form-group">
                        <label for="tripType">Trip Type</label>
                        <select class="form-control" name="tripType">
                            <option value="round_trip">Round Trip</option>
                            <option value="one_way">One Way</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="flightClass">Flight Class</label>
                        <select class="form-control" name="flightClass">
                            <option value="economy">Economy</option>
                            <option value="premium">Premium</option>
                            <option value="business">Business</option>
                        </select>
                    </div>
                    <input type="hidden" name="action" value="flightCSV">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>

            </div>
        </div>

        <div class="container mb-5">
            <h2>Select Table</h2>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tripType">Trip Type</label>
                            <select class="form-control" id="tripType">
                                <option value="round_trip">Round Trip</option>
                                <option value="one_way">One Way</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="flightClass">Flight Class</label>
                            <select class="form-control" id="flightClass">
                                <option value="economy">Economy</option>
                                <option value="premium">Premium</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">


                            <button type="submit" class="btn btn-primary">Select</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>


        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Flight Name</th>
                    <th>Flight Date</th>
                    <th>Vehicle</th>
                    <th>Price</th>
                    <th>Flying From</th>
                    <th>Flying To</th>
                    <th>Trip Type</th>
                    <th>Departure Date</th>
                    <th>Return Date</th>
                    <th>Airline</th>
                    <th>Flight Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample flight data (replace with actual data)
                $flights = array(
                    array("Flight 1", "2024-02-10", "Plane", "$200", "New York", "Los Angeles", "Round Trip", "2024-02-10", "2024-02-17", "Delta", "Economy"),
                    array("Flight 2", "2024-02-12", "Plane", "$250", "Los Angeles", "New York", "One Way", "2024-02-12", "", "American Airlines", "Business"),
                    // Add more flights as needed
                );

                // Loop through flights to generate rows
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr>";
                    foreach ($flights[$i % count($flights)] as $flight_info) {
                        echo "<td>$flight_info</td>";
                    }
                    echo "<td><button class='btn btn-danger'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>