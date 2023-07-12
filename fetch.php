<?php
// Include the database connection file
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'patient_data';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die('Could not Connect MySql Server:' . mysqli_error());
    }

    // Prepare the SQL statement to fetch the file data based on the email
    $sqlFetchData = "SELECT file FROM patient_report_data WHERE email = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sqlFetchData);
    
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $email);
    
    // Execute the query
    mysqli_stmt_execute($stmt);
    
    // Bind the result variables
    mysqli_stmt_bind_result($stmt, $file);
    
    // Fetch the result
    if (mysqli_stmt_fetch($stmt)) {
        // Set the appropriate headers for PDF file download
        header("Content-type: application/pdf");
        header("Content-Disposition: attachment; filename=\"" . $file . "\"");
        
        // Output the file data
        echo $file;
        
        // End the script to prevent further output
        exit;
    } else {
        echo "No file found for the given email.";
    }
    
    // Close the statement
    mysqli_stmt_close($stmt);
    
    // Close the connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch PDF</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="POST">
        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Fetch PDF">
    </form>
</body>
</html>
