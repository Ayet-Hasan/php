<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Table Example</title>
</head>
<body>

<?php
// Data array
$data = [
    ['Name' => 'Ahrar', 'id' => '3', 'Email' => 'abrar@yahoo.com', 'Telephone' => '01812424447'],
    ['Name' => 'Jayed', 'id' => '4', 'Email' => 'jayed@yahoo.com', 'Telephone' => '01816767676'],
    ['Name' => 'Naima', 'id' => '5', 'Email' => 'naima@yahoo.com', 'Telephone' => '01824839483'],
];

echo "<table border='1'>";
echo "<tr><th>Name</th><th>id</th><th>Email</th><th>Telephone</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" .  htmlspecialchars($cell) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
