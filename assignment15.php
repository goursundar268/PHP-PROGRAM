<!---15.Write a program to calculate Electricity bill in PHP
Conditions:
●	For first 50 units – Rs. 3.50/unit
●	For next 100 units – Rs. 4.00/unit
●	For next 100 units – Rs. 5.20/unit
●	For units above 250 – Rs. 6.50/unit
You can use conditional statements.-->

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <form method="post">
        <label for="units">Enter the number of units:</label>
        <input type="number" name="units" required>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST['units'];
    $bill = 0;
    
    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 150) {
        $bill = (50 * 3.50) + (($units - 50) * 4.00);
    } elseif ($units <= 250) {
        $bill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } else {
        $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }
    
    echo "Total electricity bill: Rs. " . number_format($bill, 2);
}
?>