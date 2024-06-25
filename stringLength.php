<!DOCTYPE html>
<html>
<head>
    <title>String Length</title>
</head>
<body>

<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <input type="submit" value="Find Length">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the string input by the user
    $inputString = $_POST['inputString'];

    // Find the length of the string
    $stringLength = strlen($inputString);

    // Display the string length
    echo "The length of the string \"$inputString\" is $stringLength characters.";
}
?>

</body>
</html>
