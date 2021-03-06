<?php
/**
 *  File name & path
 *  Author
 *  Date
 *  Description
 */

//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//start the session
session_start();
//initialize the variables
$un = "";
$validLogin = true;

//if the user is already logged in
if(isset($_SESSION['username'])){
    //redirect to home page
    header("location: index.php");
}

//If the form has been submitted
if(!empty($_POST)) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    //Require the credentials file, which defines a $logins array
    require('creds.php');

    //If the username is in the array and the password match
    if (array_key_exists($un, $logins) && $pw == $logins[$un]) {

        //record the username in the session array
        $_SESSION['username'] = $un;

        //Go to the page that the user came from, or else the home page
        $page = isset($_SESSION['page']) ? $_SESSION['page'] : "admin.php";
        header('location: ' .$page);
    }

    //Invalid login -- set flag variable
    $validLogin = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>Administrative Log In</title>
</head>
<body>
<div class="row justify-content-center mt-5">

    <section class="col-4 justify-content-center" id="form-box">
        <form id="login-form" action="#" method="post">
            <fieldset class="form-group border p-2">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" name="username">
                    <span class="err" id="err-username">Please enter a valid username</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <span class="err" id="err-password">Please enter a valid password</span>
                </div>
                <button type="submit" class="btn btn-primary">Log In</button>
            </fieldset>

        </form>
    </section>

</div>


<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require("/home/rottenco/db-creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)
or die ("Connected to Database!");
?>
<!-- jQuery first, then Popper.js, then bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="scripts/admin.js"></script>
</body>
</html>


