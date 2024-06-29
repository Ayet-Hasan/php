<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>

<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the string input by the user
    $inputString = $_POST['inputString'];

    // Reverse the string manually
    $reversedString = '';
    $length = strlen($inputString);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString .= $inputString[$i];
    }

    // Display the original and reversed strings
    echo "Original string: $inputString<br>";
    echo "Reversed string: $reversedString <br>";
     echo " length of this string:$length ";
}
?>

</body>
</html>
