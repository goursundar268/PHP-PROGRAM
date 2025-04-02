<!-- 3.	To write a program gets the name and phone no of the user from a form and show greeting text. -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    if (!empty($name) && !empty($phone)) {
        echo "<p>Hello, $name! Your phone number is $phone.</p>";
    } else {
        echo "<p>Please enter both name and phone number.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Greeting</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text"  name="name" required><br>
        <label for="phone">Phone Number:</label>
        <input type="text" name="phone" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>"