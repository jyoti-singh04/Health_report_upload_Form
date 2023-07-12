
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <div class="container">
        <form action="" method ="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-10">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-30">
                    <input type="text" id="name" name="name" maxlength="30" 
                    onkeydown="return /[a-zA-Z, ]/i.test(event.key)"
                    placeholder="Full Name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="age">Age</label>
                </div>
                <div class="col-30">
                    <input type="date" id="age" name="age" placeholder="Age">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="weight">Weight</label>
                </div>
                <div class="col-30">
                    <input type="number" id="weight" name="weight" 
                    onkeydown="return /[0-9,]/i.test(event.key)" 
                    maxlength="3"
                    placeholder="Weight">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email ID</label>
                </div>
                <div class="col-30">
                    <input type="email" id="email" name="email" 
                    maxlength="40"
                    placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="file">Upload Health Report</label>
                </div>
                <div class="col-30">
                    <input type="file" id="file" name="file"  accept="application/pdf" placeholder="file" required>
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>

    <?php
    // Include the database connection file

    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'patient_data';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $age = $_POST["age"];
    $weight = $_POST["weight"];
    $email = $_POST["email"];
    $file = $_FILES["file"];


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }

    // if ($file["error"] == UPLOAD_ERR_OK) {
    //     $file_name = mysqli_real_escape_string($conn, $file["name"]);
    //     $file_data = file_get_contents($file["tmp_name"]);

        // Prepare the SQL statement
        $sqlInsertData = "INSERT INTO patient_report_data (name, age, weight, email, `file`) VALUES ('$name', '$age', '$weight', '$email', '$file')";
        
        // Execute the query
        if (mysqli_query($conn, $sqlInsertData)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }


    // Debugging information
    echo "<br>";
    echo "SQL query: " . $sqlInsertData;    
    // }

    


// Close the connection
mysqli_close($conn);
}
?>


</body>
</html>