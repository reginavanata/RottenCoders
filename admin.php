<?php
    session_start();
    if(empty($_SESSION['username'])){

        //store the current page in the session
        $_SESSION['page'] = "admin.php";

        //redirect user to login page
        header('location: login.php');
    }
    $name = "Admin";
    $heading = "<h1>Admin Page</h1>";
    include('includes/header.php');
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require("/home/rottenco/db-creds.php");
    $cnxn = mysqli_connect($host, $user, $password, $database)
    or die ("Connected to Database!");


?>


<h2>Admin Page</h2>

<table id="questions-answers" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Question ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Question</th>
        <th>Answer</th>
    </tr>
    </thead>
    <tbody>

    <?php

//Display questiond and answers
$sql = "SELECT * FROM QAsubmissions ORDER BY question_id DESC";
$result = mysqli_query($cnxn, $sql);
    foreach($result as $row) {
        //var_dump($row);
        $question_id = $row['question_id'];
        $question = $row['question'];

        $fname = $row['first_name'];
        $lname = $row['last_name'];
        $email = $row['email'];
        $date = date("m/d/Y h:ma", strtotime($row['date']));
        $question = $row['question'];
        $answer = $row['answer'];

        echo "
        <tr>
            <td>$question_id</td>
            <td>$fname $lname</td>
            <td>$email</td>
            <td>$date</td>
            <td>$question</td>

        </tr>";
    }

    ?>
    </tbody>
    <!--<tfoot>
    <tr>
        <th>Question ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>
        <th>Question</th>
        <th>Answer</th>
    </tr>
    </tfoot>-->
</table>




<?php
    include('includes/footer.php');
?>
