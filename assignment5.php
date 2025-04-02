

<!DOCTYPE html>
<html>
<head>
    <title>Find Maximum of Three Numbers</title>
</head>
<body>
    <form method="post">
        Enter first number: <input type="text" name="num1" required><br>
        Enter second number: <input type="text" name="num2" required><br>
        Enter third number: <input type="text" name="num3" required><br>
        <input type="submit" value="Find Maximum">
    </form>

 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    
    $maxNum = $num1;
    if ($num2 > $maxNum) {
        $maxNum = $num2;
    }
    if ($num3 > $maxNum) {
        $maxNum = $num3;
    }
    echo "<h3>The maximum number is: $maxNum</h3>";
}
?>
</body>
</html>