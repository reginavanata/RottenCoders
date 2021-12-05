<?php
$name = "Confirmation";
$heading = "<h1>Green River College Software Development Program - Frequently Asked Questions</h1>";
$tagline = "<h3>Your question has been received!</h3>";
include('includes/header.php');
include('includes/disclaimer.php');
include('includes/jumbotron.php');

?>
<p class="row justify-content-center">
    <input id="homeButton" type=button onClick="parent.location='index.php'"
           value='Go Back to FAQ Page'>
</p>
    <?php
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Validating form data
    $isValid = true;

    // First Name
    $fname ="";
    if(!empty($_POST['fname'])){
        $fname = $_POST['fname'];
    } else {
        $isValid = false;
        //$fnameErr = "First name is required";
        echo "<p>Please enter a first name</p>";
    }

    // Last Name
    $lname ="";
    if(!empty($_POST['lname'])){
        $lname = $_POST['lname'];
    } else {
        $isValid = false;
        //$lnameErr = "Last name is required";
        echo "<p>Please enter a last name</p>";
    }

    $emailAddress = "";
    if(!empty($_POST['emailAddress'])){
        $emailAddress = $_POST['emailAddress'];
    } elseif(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Invalid email</p>";
    } else {

        $isValid = false;
        echo "<p>Please enter an email address</p>";
    }

    // What are you looking for?
    $questionInput = "";
    if(!empty($_POST['questionInput'])){
        $questionInput = $_POST['questionInput'];
    } else {
        $isValid = false;
        echo "<p>Please enter a question</p>";
    }

    if(!$isValid){
        die();
    }

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

    //connect to database
    require("/home/rottenco/db-creds.php");
    $cnxn = mysqli_connect($host, $user, $password, $database)
    or die ("Connected to Database!");
    //TODO: This needs to be refactored
    //Escape all single and double quotes to prevent SQL injection
    $fname = mysqli_real_escape_string($cnxn, $fname);
    $lname = mysqli_real_escape_string($cnxn, $lname);
    $email = mysqli_real_escape_string($cnxn, $emailAddress);
    $questionInput = mysqli_real_escape_string($cnxn, $questionInput);
    //Store the order in a database
    $sql = "INSERT INTO QAsubmissions (question, first_name, last_name, email)
                    VALUES('$questionInput', '$fname', '$lname', '$emailAddress')";
    mysqli_query($cnxn, $sql);

    if(!$success) {
        echo "<p>There was a problem... please call us</p>";
    }





    include('includes/footer.php');
?>

