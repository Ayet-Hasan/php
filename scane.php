<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scene Description</title>
</head>
<body>

<?php
$scene = array('white', 'green', 'red', 'blue', 'dark');

$content = "The memory of that scene for me resembles an edge of film perpetually frozen at that point: the " 
    . $scene[3] . " carpet, the " 
    . $scene[1] . " lawn, the " 
    . $scene[0] . " house, the heavy sky. 
    The new president and his first lady, Richard M. Nixon. 
    Also the woods: " 
    . $scene[2] . ", " 
    . $scene[1] . ", and " 
    . $scene[0] . ".";

echo "<p>$content</p>";
?>

</body>
</html>
