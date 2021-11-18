<?php
$page = "Confimation";
$heading = "<h1>Green River College Software Development Program - Frequently Asked Questions</h1>";
$tagline = "<h3>Your question has been received!</h3>";
include('includes/header.php');
?>
<p class="row justify-content-center">
    <input id="homeButton" type=button onClick="parent.location='index.php'"
           value='Go Back to FAQ Page'>
</p>
    <?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $emailAddress = $_POST['emailAddress'];
    $questionInput = $_POST['questionInput'];

    //send an email to Admin
    $toEmail = "vanata.regina@student.greenriver.edu";
    $fromName = "Site Admin";
    $fromEmail = "vanata.regina@student.greenriver.edu";
    $subject = "New Question";
    $headers = "From $fromName <$fromEmail>";

    $message = "Someone has asked a question \n";
    $message .= "Name: $fname $lname\n";
    $message .= "Email: $emailAddress\n";
    $message .= "Question: $questionInput\n";

    $success = mail($toEmail, $subject, $message, $headers);
    if(!$success) {
        echo "<p>There was a problem... please call us</p>";
    }
    //send a confirmation email to student/visitor
    $visitorEmail = $emailAddress;
    $fromName = "Site Admin";
    $fromEmail = "vanata.regina@student.greenriver.edu";
    $confirmSubject = "Your Question was Received!";
    $headers = "From $fromName <$fromEmail>";

    $message = "Thank you for your question $fname $lname! \n";
    $message = "We will get back to you soon! \n";
    $message .= "Your question: $questionInput\n";

    $success = mail($visitorEmail, $confirmSubject, $message, $headers);

    if(!$success) {
        echo "<p>There was a problem... please call us</p>";
    }





    include('includes/footer.php');
?>