<?php
// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Example usage
$string = "Hello, World!"; // String to be reversed

$reversedString = reverseString($string);

echo "Original string: $string<br>";
echo "Reversed string: $reversedString";
?>
