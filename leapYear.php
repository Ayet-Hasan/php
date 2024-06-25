<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>

<form method="post">
    Enter a year: <input type="number" name="year" required>
    <input type="submit" value="Check Leap Year">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to check if a year is a leap year
    function isLeapYear($year) {
        return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
    }

    // Get the year input by the user
    $year = $_POST['year'];

    // Validate input: ensure it's a positive integer
    if ($year >= 0 && filter_var($year, FILTER_VALIDATE_INT)) {
        // Check if it's a leap year
        if (isLeapYear($year)) {
            echo "$year is a leap year.";
        } else {
            echo "$year is not a leap year.";
        }
    } else {
        echo "Please enter a valid positive integer for the year.";
    }
}
?>

</body>
</html>


<!--  -->



<?php
// Function to check if a year is a leap year
function isLeapYear($year) {
    // A year is a leap year if it is divisible by 4
    // However, if the year is divisible by 100, it must also be divisible by 400 to be a leap year
    return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
}

// Example usage
$year = 2024; // You can change this value to test with different years

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>
<!--  -->