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
    <?php
    // Retrieve the results from the URL parameter
    $results = json_decode(urldecode($_GET['results']), true);

    // Now $results contains the flight search results
    ?>
    <div class="modal fade" id="addFlightModal" tabindex="-1" role="dialog" aria-labelledby="addFlightModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFlightModalLabel">Add Flight Entry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- FlightRoutesInsert.php -->
                    <form action="../../Routes/Admin/FlightRoutesInsert.php" method="post">
                        <div class="form-group">
                            <label for="airline_name">Airline Name</label>
                            <input type="text" class="form-control" name="airline_name">
                        </div>
                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="text" class="form-control-file" name="logo">
                        </div>
                        <div class="form-group">
                            <label for="flight_date">Flight Date</label>
                            <input type="date" class="form-control" name="flight_date">
                        </div>
                        <div class="form-group">
                            <label for="flying_from">Flying From</label>
                            <input type="text" class="form-control" name="flying_from">
                        </div>
                        <div class="form-group">
                            <label for="flying_to">Flying To</label>
                            <input type="text" class="form-control" name="flying_to">
                        </div>
                        <div class="form-group">
                            <label for="fare_price">Fare Price</label>
                            <input type="text" class="form-control" name="fare_price">
                        </div>
                        <div class="form-group">
                            <label for="tripType">Trip Type</label>
                            <select class="form-control" name="trip_type">
                                <option value="round_trip">Round Trip</option>
                                <option value="one_way">One Way</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="flightClass">Flight Class</label>
                            <select class="form-control" name="flight_class">
                                <option value="economy">Economy</option>
                                <option value="premium">Premium</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Your content goes here -->
    <div class="container mt-5">

        <div class="row mb-5">
            <div class="col-sm-6">
                <div class="col-sm-6">
                    <h2>Flight Information</h2>
                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal"
                        data-target="#addFlightModal">Add
                        Hotel</button>
                </div>

                <div class="col-sm-6">
                    <h2>Delete Table</h2>
                    <form action="../../Routes/Admin/FlightRoutesDelete.php" method="post"
                        enctype="multipart/form-data">
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
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
            <div class="col-sm-6">
                <h2>Upload CSV</h2>
                <form action="../../Routes/Admin/FlightRoutesUploadCSV.php" method="post" enctype="multipart/form-data">
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
            <form action="../../Routes/Admin/FlightRoutesSearch.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tripType">Trip Type</label>
                            <select class="form-control" name="tripType">
                                <option value="round_trip">Round Trip</option>
                                <option value="one_way">One Way</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="flightClass">Flight Class</label>
                            <select class="form-control" name="flightClass">
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


        <div class="container-fluid">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Airline Name</th>
                        <th>Logo</th>
                        <th>Flight Date</th>
                        <th>Flying From</th>
                        <th>Flying To</th>
                        <th>Fare Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $flight): ?>
                        <tr>
                            <td>
                                <?= $flight['airline_name'] ?>
                            </td>
                            <td>
                                <?= $flight['logo'] ?>
                            </td>
                            <td>
                                <?= $flight['flight_date'] ?>
                            </td>
                            <td>
                                <?= $flight['flying_from'] ?>
                            </td>
                            <td>
                                <?= $flight['flying_to'] ?>
                            </td>
                            <td>
                                <?= $flight['fare_price'] ?>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary btn-sm">
                                    <?= $flight['button_proceed'] ?> Proceed
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>