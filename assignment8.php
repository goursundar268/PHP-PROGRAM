<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="POST">
        Enter first number: <input type="text" name="num1" required><br>
        Enter second number: <input type="text" name="num2" required><br>
        <select name="operation" required>
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br><br>
        <input type="Submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Getting form data
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation']; // This stores the selected operation

        // Check if the inputs are numeric
        if (is_numeric($num1) && is_numeric($num2)) {
            // Perform calculation based on the operation
            switch ($operation) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero is not allowed";
                    }
                    break;
                default:
                    $result = "Invalid operation!";
            }

            // Display result
            echo "<h4>Result: $result</h4>";
        } else {
            echo "<h4>Please enter valid numeric values for both numbers.</h4>";
        }
    }
    ?>

</body>
</html>