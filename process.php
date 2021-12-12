<?php
    header('location: admin.php');
    include('includes/header.php');
    include ('includes/disclaimer.php');
    include ('includes/jumbotron.php');
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    //connect to database
    require("/home/rottenco/db-creds.php");
    $cnxn = mysqli_connect($host, $user, $password, $database)
    or die ("Connected to Database!");
    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $category = $_POST['category'];
    echo "<p>Question was: $question Answer was: $answer in the category: $category</p> ";
    $question = mysqli_real_escape_string($cnxn, $question);
    $answer = mysqli_real_escape_string($cnxn, $answer);
    $category = mysqli_real_escape_string($cnxn, $category);


$sql = "INSERT INTO faq (question, answer, category)
                    VALUES('$question', '$answer', '$category')";
mysqli_query($cnxn, $sql);

include('includes/footer.php');
