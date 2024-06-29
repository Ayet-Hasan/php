

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

   $factorial=calculateFactorial($number);
   echo $factorial;
}
?>

</body>
</html>


<!--  -->

