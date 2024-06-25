<!DOCTYPE html>
<html>
<head>
    <title>Check Student Grade</title>
</head>
<body>

<form method="post">
    Enter student marks (0-100): <input type="number" name="marks" min="0" max="100" required>
    <input type="submit" value="Check Grade">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the marks input by the user
    $marks = $_POST['marks'];

    // Function to check student grade based on marks
    function checkGrade($marks) {
        // Check conditions and assign grades based on marks
        if ($marks >= 50) {
            $grade = "First Division";
        } elseif ($marks >= 45 && $marks <= 59) {
            $grade = "Second Division";
        } elseif ($marks >= 33 && $marks <= 44) {
            $grade = "Third Division";
        } else {
            $grade = "Fail";
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
