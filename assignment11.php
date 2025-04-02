<!-- 11.	Write a php program to check whether given number is Armstrong or not. -->
<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Check</title>
</head>
<body>
    <h2>Check Armstrong Number</h2>
    <form method="post">
        <label>Enter a Number:</label>
        <input type="number" name="num" required>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $sum = 0;
        $temp = $num;
        $n = strlen($num); // Count digits

        while ($temp > 0) {
            $digit = $temp % 10;
            $sum =$sum + pow($digit, $n);
            $temp = (int)($temp / 10);
        }

        if ($sum == $num) {
            echo "<h2>$num is an Armstrong Number</h2>";
        } else {
            echo "<h2>$num is not an Armstrong Number</h2>";
        }
    }
    ?>
</body>
</html>
