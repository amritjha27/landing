<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $degree = $_POST['degree'];
    $university = $_POST['university'];
    $location = $_POST['location'];

    // Set up the email details
    $to = '1at19is130visioneer.atria.edu';
    $subject = 'New Counselling Request';
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nDegree: $degree\nUniversity: $university\nLocation: $location";
    $headers = 'From: amritjha27562@gmail.com' . "\r\n" .
        'Reply-To: amritjha27562@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error: Email not sent.';
    }
}
?>
