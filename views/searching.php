<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $from = urlencode($_POST['from']);
        $to = urlencode($_POST['to']);
        $hotelCity = isset($_POST['hotel-city']) ? urlencode($_POST['hotel-city']) : '';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search - Bombay to Delhi</title>
    <style>
        body {
            background-color: #05203c;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        /* Animation for the ellipsis */
        @keyframes ellipsis {
            0% {
                content: "Searching ";
            }
            33% {
                content: "Searching .";
            }
            66% {
                content: "Searching ..";
            }
            100% {
                content: "Searching ...";
            }
        }

        /* Apply the animation to the h1 element */
        h1::after {
            content: " ...";
            animation: ellipsis 1s infinite;
        }

        /* Plane animation */
        .plane {
            position: absolute;
            top: 50%;
            left: -50px; /* Initial position off the left side of the screen */
            animation: movePlane 5s linear forwards; /* Adjust duration as needed */
        }

        @keyframes movePlane {
            0% {
                transform: translateX(-50px); /* Start position off the left side of the screen */
            }
            100% {
                transform: translateX(calc(100vw + 50px)); /* End position off the right side of the screen */
            }
        }
    </style>
</head>

<body>
    <div class="plane">
        <img src="images/plane.png" alt="Plane Icon" width="200px" height="200px"> <!-- Replace 'path_to_your_plane_icon.png' with the actual path to your plane icon -->
    </div>
    <h1>Searching</h1>
    <?php 
    if(isset($_POST['from']) && isset($_POST['to']))
    {
        ?>
        <h2>Flying From <?php echo $from; ?> Flying To <?php echo $to; ?></h2>    
        <?php
    }
    else
    {
        ?>
        <h2>Searching in City <?php echo $hotelCity; ?></h2>    
        <?php
    }
    ?>
    <script>
        // PHP variables
        var postData = '<?php echo json_encode($_POST); ?>';

        // Set a timeout to redirect after 5 seconds (5000 milliseconds)
        setTimeout(function () {
            window.location.href = '../Routes/searchRoutes.php?postData=' + encodeURIComponent(postData); // Modify URL with your PHP variables
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
</body>

</html>
