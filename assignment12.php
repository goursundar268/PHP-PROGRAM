<!-- 12.	PHP Program to display digital clock with current time of the Server. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Digital Clock</title>
    <meta http-equiv="refresh" content="1"> <!-- Refresh page every second -->
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 100px;
        }
        #clock {
            font-size: 50px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<h2>Server Time Digital Clock</h2>
<div id="clock">
    <?php 
    echo date("H:i:s");
    echo "<br>";
    date_default_timezone_set("Asia/Kolkata"); // Set server time to Indian Standard Time (IST)
    echo "Current Server Time: " . date("Y-m-d H:i:s");
     ?>

</div>

</body>
</html>
