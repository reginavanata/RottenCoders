<?php
session_start();


$name = "Main Page";
$heading = "<h1>Green River College Software Development Program - Frequently Asked Questions</h1>";
include('includes/header.php');
include ('includes/disclaimer.php');
include ('includes/jumbotron.php');
require("/home/rottenco/db-creds.php");
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
$cnxn = mysqli_connect($host, $user, $password, $database)
or die ("Connected to Database!");
//var_dump($_SESSION);

?>



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

<!--Sidebar css-->
<link href="dependancies/css/navbar.css" type="text/css" rel="stylesheet">


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.1/js/mdb.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- initialize custom scrollbar on non-mobile devices -->

<!--Container for page content-->
<div class="container-fluid">
    <div class="row">
        <script>
            $(document).ready(function () {

                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function () {
                    // open or close navbar
                    $('#sidebar').toggleClass('active');
                    // close dropdowns
                    $('.collapse.in').toggleClass('in');
                    // and also adjust aria-expanded attributes we use for the open/closed arrows
                    // in our CSS
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

            });
        </script>
        <section class="col-lg-2 col-sm-4">
            <div class="wrapper">
                <!-- Sidebar -->

                <nav id="sidebar">
                    <div class="sidebar-header">
                        <h3 class="navbar-brand text-dark font-weight-bold">Quick Links</h3>
                    </div>
                    <ul class="list-unstyled components ">


                        <!--Class Registration-->
                        <li>
                            <p class="m-0"><b>Class Registration</b></p>
                            <ul class="list-unstyled" id="registrationSubmenu">
                                <li><a target="_blank" href='https://grcc.greenriver.edu/classfinder/'>Class Finder</a></li>
                                <li><a target="_blank" href='http://www.greenriver.edu/student-affairs/enrollment-services/degree-audit.htm'>Degree Audit</a></li>
                                <li><a target="_blank" href='http://www.greenriver.edu/online-services/student-responsibilities.htm'>Add/Drop Classes</a></li>
                                <li><a target="_blank" href='https://grcc.greenriver.edu/Register/waci004.html'>Registration Access Time</a></li>
                                <li><a target="_blank" href='https://www.greenriver.edu/students/academics/enrollment-services/transcripts/transcript-evaluation/'>Transcript Evaluation Request</a></li>
                            </ul>
                        </li>
                        <!--Financial Aid-->
                        <li>
                            <p class="m-0"><b>Financial Aid</b></p>
                            <ul class="list-unstyled" id="financialSubmenu">
                                <li><a target="_blank" href='http://www.greenriver.edu/student-affairs/financial-aid/aid-programs.htm'>Financial Aid Programs</a></li>
                                <li><a target="_blank" href='https://www.greenriver.edu/students/pay-for-college/financial-aid/student-financial-aid-portal/'>Financial Aid Portal</a></li>
                                <li><a target="_blank" href='http://www.cashcourse.org/'>Financial Management</a></li>
                                <li><a target="_blank" href='http://www.greenriver.edu/student-affairs/veterans-services.htm'>Veteran Services</a></li>
                            </ul>
                        </li>
                        <!--Academics-->
                        <li>
                            <p class="m-0"><b>Academics</b></p>
                            <ul class="list-unstyled" id="academicSubmenu">
                                <li><a target="_blank" href='http://www.greenriver.edu/student-affairs/career-and-advising-center.htm'>Career + Advising</a></li>
                                <li><a target="_blank" href='https://www.greenriver.edu/students/academics/degrees-programs/information-technology/'>Technology Division</a></li>
                                <li><a target="_blank" href='http://papertreebooks.collegestoreonline.com/ePOS?form=shared3/textbooks/main.html&store=599&design=599'>Look up my Textbooks</a></li>
                                <li><a target="_blank" href='https://www.greenriver.edu/students/academics/enrollment-services/dates-deadlines/finals-schedule/'>Finals Schedule</a></li>
                                <li><a target="_blank" href='http://www.greenriver.edu/about-us/calendars.htm'>GRC Event Calendar</a></li>
                            </ul>
                        </li>
                        <!--Graduation-->
                        <li>
                            <p class="m-0"><b>Graduation</b></p>
                            <ul class="list-unstyled" id="graduationSubmenu">
                                <li><a target="_blank" href='https://www.greenriver.edu/students/academics/enrollment-services/graduation/intent-to-graduate/'>Intent to Graduate</a></li>
                            </ul>
                        </li>

                        <!--Job Placement-->
                        <li>
                            <p class="m-0"><b>Job Resources</b></p>
                            <ul class="list-unstyled" id="placementSubmenu">
                                <li><a target="_blank" href='https://www.itconnect.greenrivertech.net'>Internships (ITConnect)</a></li>
                                <li><a target="_blank" href='http://itconnect.greenrivertech.net/studentResources'>Student Resources</a></li>
                                <li><a target="_blank" href='https://www.boardmasters.greenriverdev.com'>BoardMasters Club</a></li>
                                <li><a target="_blank" href='https://www.greenriver.edu/media/content-assets/documents/student-affairs/enrollment-services/release-student-information.pdf'>Release of Student Information</a></li>
                            </ul>
                        </li>

                        <!--Still Need Help?-->
                        <li>
                            <p class="m-0"><b>Still Need Help?</b></p>
                            <ul class="list-unstyled" id="helpSubmenu">
                                <li><a target="_blank" href="http://greenrivertech.net/frequently-asked-questions.php">Frequently Asked Questions</a></li>
                                <li><a target="_blank" href="http://www.greenriver.edu/academics/areas-of-study/details/information-technology.htm">Contact Us</a></li>
                            </ul>
                        </li>







                        <!--FACEBOOK-->
                        <!-- <div class="d-none d-sm-block" id="fb-page">
                            <div class="fb-page" data-href="https://www.facebook.com/greenrivertechnologyprograms/" data-height="500"
                                 data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                                 data-show-facepile="false"><blockquote cite="https://www.facebook.com/greenrivertechnologyprograms/"
                                                                        class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/greenrivertechnologyprograms/">
                                        Green River Technology Program</a></blockquote></div>
                        </div> -->

                    </ul>
                    <div id="sidebox" style="background-color: #28a745; color: white">
                        <div class="text-center">
                            <a href="http://messaging.greenrivertech.net/" target="_blank" style="background-color: #28a745; color: white; font-size: 18px;">
                                Sign up for internship notifications
                            </a>

                        </div>
                    </div>
                </nav>
            </div>

        </section>
        <?php
        $sql = "SELECT * FROM faq ORDER BY id ASC";
        //$id = '';
        $result = mysqli_query($cnxn, $sql);
        $cardID = 1;

        echo "<section class='col-lg-10 col-sm-6'>"; /*starts the section for the accordion*/
        echo "<div class='accordion' id='accordionExample'>"; /*start of accordion*/
        $associates = "SELECT question, answer, id FROM faq WHERE category = 'ASDegrees'";
        $resultAssociates = mysqli_query($cnxn, $associates);
        echo "<h2>Associate's Degrees</h2>";
        foreach ($resultAssociates as $row) { /*start of ASDegree category*/
            $question = $row['question'];
            $answer = $row['answer'];
            $question_id = $row['id'];
            echo "<div class='card'>";
            echo "<div class='card-header' id=$cardID>";
            echo "<h2 class='mb-0'>";
            echo "<button class='btn btn-link btn-block text-left' type='button' data-toggle='collapse' data-target='#collapse$cardID' aria-expanded='true' aria-controls='$cardID'>";
            echo '<b>' . $row['question'] . '</b>';
            echo "<a class='btn' href='questions-answers.php?id=$question_id'><i class='icon-paper-clip'></i></a>";
            echo "</button>";
            echo "</h2>";
            echo "</div>";
            echo "<div id='collapse$cardID' class='collapse' aria-labelledby='$cardID' data-parent='#accordionExample'>";
            echo   "<div class='card-body'>";
            echo "$answer";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $cardID++;

        }/*end of ASDegree Category*/
        $bachelors = "SELECT question, answer, id FROM faq WHERE category = 'BASDegrees'";
        $resultBachelors = mysqli_query($cnxn, $bachelors);
        echo "<h2>Bachelor's Degrees</h2>";
        foreach ($resultBachelors as $row) { /*Start of BASDegree Category*/
            $question = $row['question'];
            $answer = $row['answer'];
            $question_id = $row['id'];
            echo "<div class='card'>";
            echo "<div class='card-header' id=$cardID>";
            echo "<h2 class='mb-0'>";
            echo "<button class='btn btn-link btn-block text-left' type='button' data-toggle='collapse' data-target='#collapse$cardID' aria-expanded='true' aria-controls='$cardID'>";
            echo '<b>' . $row['question'] . '</b>';
            echo "<a class='btn' href='questions-answers.php?id=$question_id'><i class='icon-paper-clip'></i></a>";
            //echo "<br><a href='questions-answers.php?id=$question_id'>view</a>";


            echo "</button>";
            echo "</h2>";
            echo "</div>";
            echo "<div id='collapse$cardID' class='collapse' aria-labelledby='$cardID' data-parent='#accordionExample'>";
            echo "<div class='card-body'>";
            echo "$answer";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $cardID++;



        }/*end of BASDegree Category*/

        $transfer = "SELECT question, answer, id FROM faq WHERE category = 'TransferCredits'";
        $resultTransfer = mysqli_query($cnxn, $transfer);
        echo "<h2>Pre-earned Credits</h2>";
        foreach ($resultTransfer as $row) { /*Start of TransferCredit Category*/
            $question = $row['question'];
            $answer = $row['answer'];
            $question_id = $row['id'];
            echo "<div class='card'>";
            echo "<div class='card-header' id=$cardID>";
            echo "<h2 class='mb-0'>";
            echo "<button class='btn btn-link btn-block text-left' type='button' data-toggle='collapse' data-target='#collapse$cardID' aria-expanded='true' aria-controls='$cardID'>";
            echo '<b>' . $row['question'] . '</b>';
            echo "<a class='btn' href='questions-answers.php?id=$question_id'><i class='icon-paper-clip'></i></a>";
            echo "</button>";
            echo "</h2>";
            echo "</div>";
            echo "<div id='collapse$cardID' class='collapse' aria-labelledby='$cardID' data-parent='#accordionExample'>";
            echo "<div class='card-body'>";
            echo "$answer";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            $cardID++;

        }/*end of TransferCredit Category*/





        echo "</div>"; /*end of accordion*/
        echo "<br>";
        echo "<form id='contact-form' action='confirm.php' method='post'>
            <!--  Contact info  -->
            <fieldset class='form-group border p-2'>
                <legend>Contact Information</legend>
                <div class='form-group'>
                    <label for='fname'>First Name</label>
                    <input type='text' class='form-control' id='fname' name='fname' aria-describedby='fname'
                           placeholder='Enter first name'>
                    <span class='err' id='err-fname'>Please enter a first name</span>
                </div>
                <div class='form-group'>
                    <label for='lname'>Last Name</label>
                    <input type='text' class='form-control' id='lname' name='lname' aria-describedby='lname'
                           placeholder='Enter last name'>
                    <span class='err' id='err-lname'>Please enter a last name</span>
                </div>
                <div class='form-group'>
                    <label for='emailAddress'>Email Address</label>
                    <input type='email' class='form-control' id='emailAddress' name='emailAddress' aria-describedby='emailAddress' placeholder='Enter email'>
                    <span class='err' id='err-emailAddress'>Please enter an email address</span>
                </div>
            </fieldset>
            <div class='form-group'>
                <label for='questionInput'>What are you looking for?</label>
                <textarea class='form-control' id='questionInput' rows='3' name='questionInput' aria-describedby='questionInput'></textarea>
                <span class='err' id='err-question'>Please enter a question</span>
            </div>
            <p class='row justify-content-center'>
                <button type='submit' class='btn btn-primary'>Submit</button>
            </p>
        </form>";
        echo "</section>"; /*end of section*/

        ?>

    </div>

</div>

<?php
include('includes/footer.php');
?>
