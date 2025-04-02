<!-- 16.	Write a PHP script for the following: Design a form to accept a string. Write a function to count the total number of vowels (a,e,i,o,u) from the string. Show the occurrences of each vowel from the string.  -->
<?php
function countVowels($str) {
    $str = strtolower($str);
    $vowels = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
    // echo $vowels['a'];

    for ($i = 0; $i < strlen($str); $i++) {
        if (array_key_exists($str[$i], $vowels)) {
            $vowels[$str[$i]]++;
            // echo $vowels[$str[$i]];
            // echo "<br>";
        }
    }

    echo "Total vowels: " . array_sum($vowels) . "<br>";
    foreach ($vowels as $vo => $co) {
        echo "$vo: $co<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <form method="post">
        <input type="text" name="inputString" required>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        countVowels($_POST['inputString']); 
    }
    ?>
</body>
</html>
