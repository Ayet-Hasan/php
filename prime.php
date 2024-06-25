<?php
// Function to check if a number is prime
function isPrime($number) {
    // 1 is not a prime number
    if ($number <= 1) {
        return false;
    }

    // Check for factors from 2 to sqrt(number)
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Print prime numbers between 1 and 100
echo "Prime numbers between 1 and 100 are: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>
