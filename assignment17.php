<!-- 17.Write a program to create Chess board in PHP using for loop -->
<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 30px; height: 30px; text-align: center; }
    bbbbb                        ` </style>
</head>
<body>
    <form method="post">
        <input type="number" name="size" required placeholder="Enter size">
        <button type="submit">Generate</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $size = $_POST["size"];
        echo "<table border='1'>";
        for ($row = 0; $row < $size; $row++) {

            echo "<tr>";
            for ($col = 0; $col <$size; $col++) {
                $color = ($row + $col) % 2 == 0? "white" : "black";
                echo "<td style='background: $color;'></td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
