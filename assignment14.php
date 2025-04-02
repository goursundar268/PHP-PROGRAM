<!-- 14.	Write a php program to check whether given number is String palindrome or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="inputString" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['inputString'];
        $length = strlen($input);
        $reversed = "";

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed = $reversed . $input[$i];
           // echo "$reversed<br>";
        }

        if ($input === $reversed) {
            echo "<p>'$input' is a palindrome.</p>";
        } else {
            echo "<p>'$input' is not a palindrome.</p>";
        }
    }
    ?>
</body>
</html>
