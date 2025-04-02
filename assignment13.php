<!-- 13.	 Write a program that displays a different message based on time of day. For example page should display “Good Morning” if it is accessed in the morning. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Based on Time</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color:tomato;
            margin-top: 100px;
        }
        h1 {
            font-size: 50px;
            color: #333;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set("Asia/Kolkata"); // Set timezone to IST

$hour = date("H"); // Get the current hour in 24-hour format

if ($hour >= 5 && $hour < 12) {
    $message = "Good Morning!";
} elseif ($hour >= 12 && $hour < 17) {
    $message = "Good Afternoon!";
} elseif ($hour >= 17 && $hour < 21) {
    $message = "Good Evening!";
} else {
    $message = "Good Night!";
}

echo "<h1>Hey, $message ... keep shining and keep growing.</h1>";
?>

</body>
</html>
