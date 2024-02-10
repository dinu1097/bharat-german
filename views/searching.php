<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Store all POST data into session
    $_SESSION['post_data'] = $_POST;
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
    </style>
</head>

<body>
    <h1>Searching</h1>

    <script>
        // Set a timeout to redirect after 5 seconds (5000 milliseconds)
        setTimeout(function () {
            window.location.href = '../Routes/searchRoutes.php'; // Change 'new_page.php' to your desired page
        }, 5000); // 5000 milliseconds = 5 seconds
    </script>
</body>

</html>
