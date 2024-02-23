<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Search Box with Multiple Options</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="col-md col-12 form-group d-flex flex-column">
        <label for="from-form1-s" class="text-white">Flying To</label>
        <input type="text" class="form-control" id="searchBox22" placeholder="Search...">
        <select multiple class="form-control" id="selectBox22">
            <option value="" disabled selected></option>
            <option value="Anchorage">Anchorage</option>
            <option value="Albany">Albany</option>
            <option value="Albuquerque">Albuquerque</option>
            <option value="Aspen">Aspen</option>
            <option value="Asuncion">Asuncion</option>
            <option value="Atlanta Georgia">Atlanta Georgia</option>
            <option value="Augusta">Augusta</option>
            <option value="Austin">Austin</option>
            <option value="Baltimore">Baltimore</option>
            <option value="Baton Rouge">Baton Rouge</option>
            <option value="Billings">Billings</option>
            <option value="Binghamton">Binghamton</option>
            <option value="Bogota Colombia">Bogota Colombia</option>
            <option value="Birmingham">Birmingham</option>
            <option value="Brasilia">Brasilia</option>
            <option value="Buenos Aires">Buenos Aires</option>
            <option value="Boise">Boise</option>
            <option value="Boston Massachusetts">Boston Massachusetts</option>
            <option value="Buffalo">Buffalo</option>
            <option value="Burbank">Burbank</option>
            <option value="Calgary">Calgary</option>
            <option value="Cancun">Cancun</option>
            <option value="Cedar Rapids">Cedar Rapids</option>
            <option value="Charleston">Charleston</option>
            <option value="Charlotte">Charlotte</option>
            <option value="Cheyenne">Cheyenne</option>
            <option value="Chicago Ohare">Chicago Ohare</option>
            <option value="Cincinnati">Cincinnati</option>
            <option value="Cleveland Ohio">Cleveland Ohio</option>
            <option value="Colorado Springs">Colorado Springs</option>
            <option value="Cordoba">Cordoba</option>
            <option value="Dallas Fortworth">Dallas Fortworth</option>
            <option value="Denver Colarado">Denver Colarado</option>
            <option value="Des Moines">Des Moines</option>
            <option value="Detroit">Detroit</option>
            <option value="Raleigh Durham">Raleigh Durham</option>
            <option value="Fairbanks">Fairbanks</option>
            <option value="Fayetteville">Fayetteville</option>
            <option value="Fort Lauderdale">Fort Lauderdale</option>
            <option value="Fort Myers">Fort Myers</option>
            <option value="Fresno">Fresno</option>
            <option value="Gainesville">Gainesville</option>
            <option value="Grand Rapids">Grand Rapids</option>
            <option value="Greensboro">Greensboro</option>
            <option value="Gulfport">Gulfport</option>
            <option value="Hartford">Hartford</option>
            <option value="Helena">Helena</option>
            <option value="Honolulu">Honolulu</option>
            <option value="Houston">Houston</option>
            <option value="Idaho Falls">Idaho Falls</option>
            <option value="Indianapolis">Indianapolis</option>
            <option value="Ithaca">Ithaca</option>
            <option value="Jackson">Jackson</option>
            <option value="Jacksonville">Jacksonville</option>
        </select>
    </div>

    <script>
        $(document).ready(function () {
            $('#searchBox11').on('input', function () {
                var searchText = $(this).val().toLowerCase();
                if (searchText.length > 0) {
                    $('#selectBox22').show(); // Show select box when there is input
                    $('#selectBox22 option').each(function () {
                        var optionText = $(this).text().toLowerCase();
                        var match = optionText.includes(searchText);
                        $(this).toggle(match);
                    });
                } else {
                    $('#selectBox22').hide(); // Hide select box when there is no input
                }
            });
        });
    </script>


</body>

</html>