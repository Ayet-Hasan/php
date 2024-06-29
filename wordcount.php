<!DOCTYPE html>
<html>
<head>
    <title>Word Count</title>
</head>
<body>

<form method="post">
    Enter a string: <input type="text" name="inputString" required>
    <input type="submit" value="Count Words">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to count words in a string
    function countWords($str) {
        // Use str_word_count function to count words
        // This function counts words separated by any whitespace
        return str_word_count($str);
    }

    // Get the string input by the user
    $inputString = $_POST['inputString'];

    // Call the function to count words and print the result
    $numWords = countWords($inputString);
    echo "The number of words in the string \"$inputString\" is: $numWords";
}
?>

</body>
</html>


