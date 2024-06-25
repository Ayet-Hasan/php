<?php
// Function to find the largest number in an array without using array functions
function findLargestNumber($arr) {
    // Check if the array is empty
    if (empty($arr)) {
        return null; // Return null if the array is empty
    }

    // Initialize the largest number with the first element of the array
    $max = $arr[0];

    // Loop through the array starting from the second element
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        // If current element is greater than the current max, update max
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    return $max;
}

// Example usage
$numbers = [3, 8, 1, 6, 2, 10, 4]; // You can change this array to test with different numbers

// Call the function and print the result
$largestNumber = findLargestNumber($numbers);
echo "The largest number in the array is: $largestNumber";
?>




<!--  -->


<!DOCTYPE html>
<html>
<head>
    <title>Find Largest Number in Array</title>
</head>
<body>

<form method="post">
    Enter numbers separated by commas: <input type="text" name="numbers" required>
    <input type="submit" value="Find Largest">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to find the largest number in an array without using array functions
    function findLargestNumber($arr) {
        // Convert input string to array by splitting on commas
        $numbers = explode(",", $arr);

        // Check if the array is empty
        if (empty($numbers)) {
            return null; // Return null if the array is empty
        }

        // Initialize the largest number with the first element of the array
        $max = $numbers[0];

        // Loop through the array starting from the second element
        $length = count($numbers);
        for ($i = 1; $i < $length; $i++) {
            // If current element is greater than the current max, update max
            if ($numbers[$i] > $max) {
                $max = $numbers[$i];
            }
        }

        return $max;
    }

    // Get the numbers input by the user
    $inputNumbers = $_POST['numbers'];

    // Call the function to find the largest number and print the result
    $largestNumber = findLargestNumber($inputNumbers);
    if ($largestNumber !== null) {
        echo "The largest number in the array [$inputNumbers] is: $largestNumber";
    } else {
        echo "Please enter valid numbers separated by commas.";
    }
}
?>

</body>
</html>
