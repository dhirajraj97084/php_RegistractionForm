<?php
include 'config.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm-password'];

  // Check if passwords match
  if ($password !== $confirm_password) {
    echo "Passwords do not match!";
  } else {
    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the students table
    $sql = "INSERT INTO students (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
      echo "Registration successful!";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

// Close connection
$conn->close();
?>
