<?php
// Given array
$scene = array('white', 'green', 'red', 'blue', 'dark');

// Desired description
$description = "The memory of that scene for me resembles an edge of film perpetually frozen at that point, honorary pathway, the green yard, the white house, the heavy sky. The new president and his first fan Richard M. Nixon also the woods 'red', 'green' and 'white' will come from \$acene.";

// Replace placeholders in the description with elements from $scene array
foreach ($scene as $color) {
    $description = str_replace($color, "<b>$color</b>", $description);
}

// Output the modified description
echo $description;
?>
