<?php
    session_start();
    if(empty($_SESSION['username'])){

        //store the current page in the session
        $_SESSION['page'] = "admin.php";

        //redirect user to login page
        header('location: login.php');
    }
    $name = "New FAQ";
    $heading = "<h1>New FAQ Page</h1>";
    include('includes/header.php');
    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require("/home/rottenco/db-creds.php");
    $cnxn = mysqli_connect($host, $user, $password, $database)
    or die ("Connected to Database!");
?>

<!--//create some sort of form that pulls questions from the database?
//allows for making changes to the question? wording/punctuation/etc
//has a field for the answer
//button to push to website

//category - ASDegrees(id 1-5) BASDegrees (id 6-11) TransferCredits (id 12-14)-->
    <form id="new-faq" action="process.php" method="post">
        <fieldset class="form-group border p-2">
            <legend>Add a new FAQ to the website</legend>
            <div class="form-group">
                <label for="question">Question</label>
                    <input type="text" class="form-control" id="question" name="question" placeholder="Enter a new question">
                    <span class='err' id='err-question'>Please enter a question</span>
            </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <input type="text" class="form-control" placeholder="Enter a new answer" id="answer" name="answer">
                    <span class='err' id='err-answer'>Please enter an answer</span>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" class="form-control" name="category">
                        <option selected value="none">Choose a Category</option>
                        <option id="ASDegrees" value="ASDegrees">ASDegrees</option>
                        <option id="BASDegrees" value="BASDegrees">BASDegrees</option>
                        <option id="TransferCredits" value="TransferCredits">TransferCredits</option>

                    </select>
                    <span class='err' id='err-category'>Please select a category</span>
                </div>
        </fieldset>


    <p class="row justify-content-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </p>
</form>
<?php
include('includes/footer.php');
?>


