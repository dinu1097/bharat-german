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
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="addEntryModal" tabindex="-1" role="dialog" aria-labelledby="addEntryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEntryModalLabel">Add Package Entry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="packageName">Package Name</label>
                            <input type="text" class="form-control" id="packageName">
                        </div>
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <input type="text" class="form-control" id="destination">
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="duration">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="includes">Includes</label>
                            <input type="text" class="form-control" id="includes">
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="text" class="form-control" id="rating">
                        </div>
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
                <h2>Holiday Packages Information</h2>
                <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#addHotelModal">Add
                    Hotel</button>
                <button type="button" class="btn btn-danger mb-5" data-toggle="modal"
                    data-target="#addHotelModal">Delete
                    All
                    Hotel Data</button>
            </div>
            <div class="col-sm-6">
                <h2>Upload CSV</h2>
                <form>
                    <div class="form-group">
                        <label for="csvFile">Select CSV File</label>
                        <input type="file" class="form-control-file" id="csvFile">
                    </div>
                    <div class="form-group">
                        <label for="flightClass">Package type</label>
                        <select class="form-control" id="flightClass">
                            <option value="economy">Economy</option>
                            <option value="premium">Premium</option>
                            <option value="luxury">Luxury</option>
                        </select>
                    </div>
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
                                <label for="flightClass">Package Type</label>
                                <select class="form-control" id="flightClass">
                                    <option value="economy">Economy</option>
                                    <option value="premium">Premium</option>
                                    <option value="business">Luxury</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">


                            <button type="submit" class="btn btn-primary">Select</button>
                        </div>
                    </div>


                </form>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Package Name</th>
                    <th>Destination</th>
                    <th>Duration</th>
                    <th>Price</th>
                    <th>Includes</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample package data (replace with actual data)
                $packages = array(
                    array("Package A", "Maldives", "7 days", "$2000", "Flight, Hotel, Meals", "4.8"),
                    array("Package B", "Thailand", "10 days", "$2500", "Flight, Hotel, Tours", "4.5"),
                    // Add more packages as needed
                );

                // Loop through packages to generate rows
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr>";
                    foreach ($packages[$i % count($packages)] as $package_info) {
                        echo "<td>$package_info</td>";
                    }
                    echo "<td><button class='btn btn-danger'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>