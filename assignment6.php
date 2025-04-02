<!DOCTYPE html>
<html>
<head>
    <title>Swap Two Numbers</title>
</head>
<body>
    <form method="POST">
        Enter first number: <input type="text" name="num1" required><br>
        Enter second number: <input type="text" name="num2" required><br>
        <input type="submit" value="Swap Numbers">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    echo "<h3>Before Swapping: Number 1 = $num1, Number 2 = $num2</h3>";
    
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    
    echo "<h3>After Swapping: Number 1 = $num1, Number 2 = $num2</h3>";
}

?>
</body>
</html>
