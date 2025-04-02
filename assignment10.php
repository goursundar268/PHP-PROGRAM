<!-- 10.	 Write a php program to check whether given number is palindrome or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Check Palindrome Number</h2>
    <form method="post">
        Enter a Number: <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $original = $number;
        $reverse = 0;

        while ($number > 0) {
            $digit = $number % 10; 
            $reverse = ($reverse * 10) + $digit; 
            $number = (int)($number / 10);
        
        }

        if ($original == $reverse) {
            echo "<h2>$original is a Palindrome.</h2>";
        } else {
            echo "<h2>$original is not a Palindrome.</h2>";
        }
    }
    ?>
</body>
</html>
