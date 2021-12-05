<?php
$heading = "<h1>Q&A</h1>";
include('includes/header.php');
include ('includes/disclaimer.php');
include ('includes/jumbotron.php');



$page = "Questions-Answers Page";

//Turn on error reporting


//Redirect to Admin page if order ID is missing from URL
if (!isset($_GET['id'])) {
    header ("location: index.php");
}

//echo'<div class="main-container">';



//Connect to DB
require("/home/rottenco/db-creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)
or die("Error connecting to database");

?>



    <p class="row justify-content-center">
        <input id="homeButton" type=button onClick="parent.location='index.php'"
               value='Go Back to FAQ Page'>
    </p>


<?php

$question_id = $_GET['id'];

//Display pizza orders
$sql = "SELECT * FROM rottenco_grcfaq.faq WHERE id = $question_id";
$result = mysqli_query($cnxn, $sql);

//Make sure we got a result back
if (mysqli_num_rows($result) == 0) {
    die ("<p>Question not found.</p>");
}

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//var_dump($row);

$question_id = $row['id'];
$question = $row['question'];
$answer = $row['answer'];
$category = $row['category'];

//echo "<div class='main-container'>";
 echo "<section class='text-left '>";
echo "<h1>&nbsp; Question:</h1> <br><h3>&nbsp; &nbsp; &nbsp; $question</h3><br>";
echo "<h1>&nbsp; Answer:</h1><br><h6>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;$answer</h6><br><br>";
//echo "<p>Category: $category</p>";
include ('includes/footer.php');
 echo "</div>";

?>




<script src="//code.jquery.com/jquery-3.5.1.js"></script>


