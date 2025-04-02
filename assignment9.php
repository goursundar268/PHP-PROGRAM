<!-- 9.	Write PHP program to display current date and display using getdate() function. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Get current date and time details
$currentDate = getdate();

// Display the full date
echo "Today's Date: " . $currentDate['mday'] . "-" . $currentDate['mon'] . "-" . $currentDate['year'] . "<br>";

// Display full details
echo "Day of the week: " . $currentDate['weekday'] . "<br>";
echo "Month: " . $currentDate['month'] . "<br>";
echo "Current Time: " . $currentDate['hours'] . ":" . $currentDate['minutes'] . ":" . $currentDate['seconds'];
?>

</body>
</html>




