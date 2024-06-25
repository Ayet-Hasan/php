<?php
// Function to calculate the factorial of a number using a loop
function calculateFactorial($number) {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

// Example usage
$number = 5; // You can change this value to test with different numbers
$factorial = calculateFactorial($number);

echo "The factorial of $number is $factorial.";
?>


<!--  -->

<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<form method="post">
    Enter a number: <input type="number" name="number" required>
    <input type="submit" value="Calculate Factorial">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to calculate the factorial of a number using a loop
    function calculateFactorial($number) {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

    // Get the number input by the user
    $number = $_POST['number'];

    // Check if the input is a positive integer
    if ($number >= 0 && filter_var($number, FILTER_VALIDATE_INT)) {
        // Call the function and print the result
        $factorial = calculateFactorial($number);
        echo "The factorial of $number is $factorial.";
    } else {
        echo "Please enter a valid positive integer.";
    }
}
?>

</body>
</html>
