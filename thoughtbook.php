<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thoughtbook</title>
</head>
<body>
    <a href="/">take me home</a>
    <br>
    <h1>thoughtbook</h1>
    <?php

// Connect to the database
$conn = mysqli_connect("localhost", "qqkcmtcxab", "E4KMU8NfjU", "qqkcmtcxab");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all thoughts from the table
$query = "SELECT * FROM thoughtbook";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch the result as an array of associative arrays (each representing a row)
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the values in the row using the column names
        
        // Do something with the thought (e.g., print it to the screen)
        echo "<q>" . $row['content'] . "</q><br><strong>" . $row["timestamp"] . "</strong><br><br>";
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>
</body>
</html>

