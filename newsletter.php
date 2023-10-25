
<?php
// Database connection settings
$servername = "sql212.infinityfree.com";
$username = "if0_35279329";
$password = "raZgoBwy1Wm2J";
$dbname = "if0_35279329_contact_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];


// Insert data into the database
$sql = "INSERT INTO contact_form(name, email,contact) VALUES ('$name', '$email','$contact')";

if ($conn->query($sql) === TRUE) {
    // Redirect to another page upon successful submission
    // echo "Data inserted successfully.";
    // echo "Redirect to homepage after 10s : "
    header("Location: thank.html");
    
    
    exit(); // Ensure the script terminates after the redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

