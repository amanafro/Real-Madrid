<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];

  // Example: Display the received values
  echo "First Name: " . $firstname . "<br>";
  echo "Last Name: " . $lastname . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Subject: " . $subject . "<br>";
}
?>
