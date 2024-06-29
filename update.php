<?php
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password is empty
$dbname = "data"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100),
    telephone VARCHAR(20)
)";


// Function to display the table
function displayTable($conn) {
    $sql = "SELECT * FROM Users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Telephone</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["telephone"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
     //   echo "0 results";
    }
}

// Insert data into table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_insert'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $sql = "INSERT INTO Users (name, email, telephone) VALUES ('$name', '$email', '$telephone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
    }
}

// Update data in table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $sql = "UPDATE Users SET name='$name', email='$email', telephone='$telephone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }
}

// Delete data from table
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM Users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully<br>";
    } else {
        echo "Error deleting record: " . $conn->error . "<br>";
    }
}

// Display the current table data
echo "<h2>Current Table Data:</h2>";
displayTable($conn);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
</head>
<body>
    <h2>Insert Record:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email"><br><br>
        Telephone: <input type="text" name="telephone"><br><br>
        <input type="submit" name="submit_insert" value="Insert Record">
    </form>

    <h2>Update Record:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        ID of Record to Update: <input type="text" name="id" required><br><br>
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email"><br><br>
        Telephone: <input type="text" name="telephone"><br><br>
        <input type="submit" name="submit_update" value="Update Record">
    </form>

    <h2>Delete Record:</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        ID of Record to Delete: <input type="text" name="id" required><br><br>
        <input type="submit" name="submit_delete" value="Delete Record">
    </form>
</body>
</html>
