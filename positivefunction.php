<?php
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
$number = -3; // You can change this value to test with different numbers

// Call the function and print the result
echo checkNumber($number);
?>
