<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Search Box with Multiple Options</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <div class="col-md col-12 form-group">
    <label for="citySelect" class="text-white">Flying To</label>
    <input type="text" class="form-control" id="citySearch" placeholder="Search city...">
    <select class="form-control mt-2" id="citySelect" name="to" required style="display: none;">
      <option value="" disabled selected></option>
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Ahmedabad">Ahmedabad</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Chennai">Chennai</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Kolkata">Kolkata</option>
      <option value="Pune">Pune</option>
      <option value="Amritsar">Amritsar</option>
      <option value="Kochi-Cochin">Kochi-Cochin</option>
      <option value="Goa">Goa</option>
      <option value="Jaipur">Jaipur</option>
    </select>
  </div>

  <script>
    $(document).ready(function () {
      $('#citySearch').on('input', function () {
        var searchText = $(this).val().toLowerCase();
        if (searchText.length > 0) {
          $('#citySelect').show(); // Show select box when there is input
          $('#citySelect option').each(function () {
            var optionText = $(this).text().toLowerCase();
            var match = optionText.includes(searchText);
            $(this).toggle(match);
          });
        } else {
          $('#citySelect').hide(); // Hide select box when there is no input
        }
      });
    });
  </script>

</body>

</html>