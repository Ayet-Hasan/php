<!DOCTYPE html>
<html>
<head>
    <title>Day Message</title>
</head>
<body>

<form method="post">
    Enter a day: <input type="text" name="day" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the day input by the user
    $day = $_POST['day'];

    // Check the input day and print the corresponding message
    if ($day == 'Friday' || $day == 'friday') {
        echo "Nice weekend!";
    } elseif ($day == 'Sunday' || $day == 'sunday') {
        echo "Nice Sunday!";
    } else {
        echo "Bad!";
    }
}
?>

</body>
</html>
