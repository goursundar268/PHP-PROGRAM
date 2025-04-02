
<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="num" required>
    <input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    
    echo "<h3>Multiplication Table of $num</h3>";
    
    for ($i = 1; $i <= 10; $i++)
     {
        $p= $num * $i;
        echo "$num x $i = $p  <br>";
    }
}
?>

</body>
</html>
