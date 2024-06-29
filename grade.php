<!DOCTYPE html>
<html>
<head>
    <title>Check Student Grade</title>
</head>
<body>

<form method="post">
    Enter student marks (0-100): <input type="number" name="marks"  required>
    <input type="submit" value="Check Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the marks input by the user
    $marks = $_POST['marks'];

    // Function to check student grade based on marks
    function checkGrade($marks) {
        // Check conditions and assign grades based on marks
        if ($marks >= 50 && $marks<=100) {
            $grade = "First Division";
        } elseif ($marks >= 45 && $marks <= 59) {
            $grade = "Second Division";
        } elseif ($marks >= 33 && $marks <= 44) {
            $grade = "Third Division";
        } 
        elseif ($marks >= 0 && $marks <= 32) {
            $grade = "fail";
        } 
        else {

            $grade = "invalid marks";
        }

        return $grade;
    }

    // Call the function to check grade based on user input and print the result
    $studentGrade = checkGrade($marks);
    echo "Student grade based on marks $marks%: $studentGrade";
}
?>

</body>
</html>
