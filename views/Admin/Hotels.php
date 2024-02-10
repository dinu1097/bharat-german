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
    <div class="modal fade" id="addHotelModal" tabindex="-1" role="dialog" aria-labelledby="addHotelModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addHotelModalLabel">Add Hotel Entry</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="hotelName">Hotel Name</label>
                            <input type="text" class="form-control" id="hotelName">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location">
                        </div>
                        <div class="form-group">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" class="form-control" id="checkInDate">
                        </div>
                        <div class="form-group">
                            <label for="checkOutDate">Check-out Date</label>
                            <input type="date" class="form-control" id="checkOutDate">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price">
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <input type="text" class="form-control" id="rating">
                        </div>
                        <div class="form-group">
                            <label for="facilities">Facilities</label>
                            <input type="text" class="form-control" id="facilities">
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
                <h2>Hotel Information</h2>
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
                        <label for="hotelRating">Hotel Rating</label>
                        <select class="form-control" id="hotelRating">
                            <option value="0-3">0-3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>

            </div>
        </div>


    </div>
    <div class="container mb-5">
        <h2>Select table</h2>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hotelRating">Hotel Rating</label>
                        <select class="form-control" id="hotelRating">
                            <option value="0-3">0-3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Hotel Name</th>
                    <th>Location</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th>Facilities</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample hotel data (replace with actual data)
                $hotels = array(
                    array("Hotel A", "New York", "2024-02-10", "2024-02-17", "$150", "4.5", "Pool, Gym, Free Wi-Fi"),
                    array("Hotel B", "Los Angeles", "2024-02-12", "2024-02-15", "$200", "4.2", "Spa, Restaurant, Parking"),
                    // Add more hotels as needed
                );

                // Loop through hotels to generate rows
                for ($i = 0; $i < 10; $i++) {
                    echo "<tr>";
                    foreach ($hotels[$i % count($hotels)] as $hotel_info) {
                        echo "<td>$hotel_info</td>";
                    }
                    echo "<td><button class='btn btn-danger'>Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>