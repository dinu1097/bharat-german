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
                    <!-- HotelRoutesInsert.php -->
                    <form action="../../Routes/Admin/HotelRoutesInsert.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="checkInDate">City</label>
                            <input type="text" class="form-control" name="City">
                        </div>
                        <div class="form-group">
                            <label for="checkInDate">Check-in Date</label>
                            <input type="date" class="form-control" name="checkInDate">
                        </div>
                        <div class="form-group">
                            <label for="checkOutDate">Check-out Date</label>
                            <input type="date" class="form-control" name="checkOutDate">
                        </div>
                        <div class="form-group">
                            <label for="room_type">Room Type</label>
                            <input type="text" class="form-control" name="room_type">
                        </div>
                        <div class="form-group">
                            <label for="guest_name">Guest Name</label>
                            <input type="text" class="form-control" name="guest_name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number">
                        </div>
                        <div class="form-group">
                            <label for="hotelRating">Hotel Rating</label>
                            <select class="form-control" name="hotelRating">
                                <option value="0-3">0-3 Star</option>
                                <option value="4">4 Star</option>
                                <option value="5">5 Star</option>
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
                    <h2>Hotel Information</h2>
                    <button type="button" class="btn btn-primary mb-5" data-toggle="modal"
                        data-target="#addHotelModal">Add
                        Hotel</button>
                </div>
                <div class="col-sm-6">
                    <h2>Delete table</h2>
                    <form action="../../Routes/Admin/HotelRoutesDelete.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hotelRating">Hotel Rating</label>
                                    <select class="form-control" name="hotelRating">
                                        <option value="0-3">0-3 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="5">5 Star</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>

                </div>


            </div>
            <div class="col-sm-6">
                <h2>Upload CSV</h2>
                <form action="../../Routes/Admin/HotelRoutes.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="csvFile">Select CSV File</label>
                        <input type="file" class="form-control-file" name="csvFile">
                    </div>
                    <div class="form-group">
                        <label for="hotelRating">Hotel Rating</label>
                        <select class="form-control" name="hotelRating">
                            <option value="0-3">0-3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                        </select>
                    </div>
                    <input type="hidden" name="action" value="hotelCSV">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>

            </div>
        </div>


    </div>
    <div class="container mb-5">
        <h2>Select table</h2>
        <form action="../../Routes/Admin/HotelRoutesSearch.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hotelRating">Hotel Rating</label>
                        <select class="form-control" name="hotelRating">
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
                <?php foreach ($results as $hotel): ?>
                    <tr>
                        <td>
                            <?= $hotel['id'] ?>
                        </td>
                        <td>
                            <?= $hotel['city'] ?>
                        </td>
                        <td>
                            <?= $hotel['checkin_date'] ?>
                        </td>
                        <td>
                            <?= $hotel['checkout_date'] ?>
                        </td>
                        <td>
                            <?= $hotel['room_type'] ?>
                        </td>
                        <td>
                            <?= $hotel['guest_name'] ?>
                        </td>
                        <td>
                            <?= $hotel['email'] ?>
                        </td>
                        <td>
                            <?= $hotel['contact_number'] ?>
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

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>