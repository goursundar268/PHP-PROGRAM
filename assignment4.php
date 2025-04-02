<!-- 4.	 Create a php program to find odd or even number from given number. -->



<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Check if a Number is Odd or Even</h2>   
    <form method="post"> 
        <label for="number">Enter a number:</label>
        <input type="text" name="number" required><br>
        <button type="submit">Check</button>
    </form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    
    if ($number % 2 == 0) {
        echo "$number is an Even number.";
    } else {
        echo "$number is an Odd number.";
    }
}
?>
    
    
</body>
</html>

"