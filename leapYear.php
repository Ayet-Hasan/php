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
        if( ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0))){
            return "leap year";
        }
        else{
            return "not leap";
        }
    }

    // Get the year input by the user
    $year = $_POST['year'];

    // Validate input: ensure it's a positive integer
$leapyr=isleapyear($year);
echo $leapyr;
}
?>

</body>
</html>


<!--  -->



