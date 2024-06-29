<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form method="post">
    Enter number: <input type="number" name="number"  >
    <input type="submit" value="Check number">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the marks input by the user
    $number = $_POST['number'];


// Function to check if a number is positive, negative, or zero
function checkNumber($number) {
    if ($number > 0) {
        return "The number $number is positive.";
    } elseif ($number < 0) {
        return "The number $number is negative.";
    } else {
        return "The number $number is zero.";
    }
}

// Example usage
//$number = -3; // You can change this value to test with different numbers

// Call the function and print the result
echo checkNumber($number);
}
?>


</body>
</html>
