<?php
// Print numbers from 10 to 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
?>

<!--  -->


<?php
// Function to print numbers from 10 to 1 recursively
function printNumbers($n) {
    // Base case: if n is less than 1, stop recursion
    if ($n < 1) {
        return;
    }
    
    // Print current number
    echo $n . " ";
    
    // Recursive call with n-1
    printNumbers($n - 1);
}

// Call the function to print numbers from 10 to 1
printNumbers(10);
?>
