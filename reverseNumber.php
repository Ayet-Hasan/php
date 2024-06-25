<!DOCTYPE html>
<html>
<head>
    <title>Reverse Number</title>
</head>
<body>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to reverse a number
    function reverseNumber($num) {
        // Convert number to string to easily manipulate digits
        $numStr = (string) $num;
        // Reverse the string representation of the number
        $reversedNumStr = strrev($numStr);
        // Convert the reversed string back to an integer
        $reversedNum = (int) $reversedNumStr;
        return $reversedNum;
    }

    // Get the number input by the user
    $number = $_POST['number'];

    // Call the function and print the result
    $reversedNumber = reverseNumber($number);
    echo "Original number: $number<br>";
    echo "Reversed number: $reversedNumber";
}
?>

</body>
</html>



<!--  -->


<?php
// Function to reverse a number
function reverseNumber($num) {
    // Convert number to string to easily manipulate digits
    $numStr = (string) $num;
    // Reverse the string representation of the number
    $reversedNumStr = strrev($numStr);
    // Convert the reversed string back to an integer
    $reversedNum = (int) $reversedNumStr;
    return $reversedNum;
}

// Example usage
$number = 123456; // You can change this value to test with different numbers

// Call the function and print the result
$reversedNumber = reverseNumber($number);
echo "Original number: $number\n";
echo "Reversed number: $reversedNumber\n";
?>
