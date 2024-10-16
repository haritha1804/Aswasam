<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Set the recipient email address.
    $to = "harithachandran.m@gmail.com";  // Owner's email address

    // Set the email subject.
    $subject = "New Appointment Request from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Doctor: $doctor\n";
    $email_content .= "Preferred Date: $date\n";
    $email_content .= "Preferred Time: $time\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $headers = "From: $name <$email>";

    // Send the email.
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a thank-you page (optional)
        echo "<script>alert('Your appointment has been booked successfully!'); window.location.href = 'thankyou.html';</script>";
    } else {
        // Display an error message if the email couldn't be sent.
        echo "<script>alert('Oops! Something went wrong and we couldn't send your message.');</script>";
    }
}
?>
