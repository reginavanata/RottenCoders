<?php
    $page = "Main Page";
    $heading = "<h1>Green River College Software Development Program - Frequently Asked Questions</h1>";
    include('includes/header.php');
    include ('includes/disclaimer.php');
    include ('includes/jumbotron.php');

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

        <!--Accordion Questions-->
        <section class="col-lg-10 col-sm-6">
            <div class="accordion" id="accordionExample">
                <h3>Associate's Degrees</h3>
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b>What is an Associate's Degree?</b>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>An Associate’s Degree is a two-year degree consisting of about 90 credits. There are three types of Associate’s Degrees available:</b>
                            <ul>
                                <li>AA - Associate of Arts, consists of mostly Humanities and Social Science courses, with just a few technical courses.</li>
                                <li>AS - Associate of Science, consists of mostly math and science courses, along with Computer Science classes and a few general education courses.</li>
                                <li> AAS-T - Associate of Applied Science, consists of mostly technical courses, with just a few general education courses.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <b>Which degree should I pursue: AA, AS, or AAS-T?</b>
                            </button>
                        </h2>

                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>Which degree is best for you depends on your end goal:</b>
                            <ul>
                                <li>If you wish to pursue a Bachelor’s of Applied Science (BAS) in Network Administration
                                    & Security at Green River, then you need to earn an AAS-T.
                                </li>
                                <li>If you wish to pursue a Bachelor’s of Applied Science (BAS) in Software Development
                                    at Green River, then any two-year degree (AA, AS, or AAS-T) will work, along with a
                                    few prerequisite courses.
                                </li>
                                <li>If you intend to transfer to another 4-year university, then you will need an AA or
                                    AS, depending on the program. Talk to your advisor for help choosing the pathway
                                    that is correct for you.
                                </li>
                                <li>If you are interested in seeking an immediate entry-level job with a two-year
                                    degree, and do not intend to pursue a 4-year degree, then the AAS-T is your best option.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <b>If I'm an AA student intending to pursue a BAS in Software Development, what classes should I take?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>We advise the following courses (all five credits each) as part of the AA degree:</b>
                            <ul>

                                <li>MATH& 141 Precalculus 1 or MATH 147 Finite Mathematics (Quantitative/Symbolic Reasoning, QSR)</li>
                                <li>CS& 141 Computer Science 1 - Java (Natural Science List B) see CS 120 & MATH&142 as prerequisites</li>
                                <li>CS 145 Java 2 - Data Structures (Distribution)</li>
                            </ul>
                            <b>For your elective credits, we recommend:</b>
                            <ul>
                                <li>IT 201 Database Fundamentals (Unrestricted Elective)</li>
                                <li>SDEV 106 Front-End Web Development (Unrestricted Elective)</li>
                            </ul>
                            <b>After completing the AA degree, we also recommend the following "bridge" classes:</b>
                            <ul>
                                <li>SDEV 117 Web Programming with JavaScript</li>
                                <li>IT 190 Linux Administration 1 (nice-to-have, but not required)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <b>What are my AAS-T Options?</b>
                            </button>
                        </h2>

                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>The AAS-T in Information Technology has two options: A Networking track and a Software track.
                                    The Networking track prepares students to transfer to the BAS in Network Administration and Security,
                                    or to obtain an entry-level position as a help-desk technician. The Software track prepares students
                                    to transfer to the BAS in Software Development.</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <b>How much math do I need, and how do I know where to start?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>If a student has graduated high school within the past year, a student can use their
                                    high school transcript to obtain placement instead of taking the COMPASS test. Recent
                                    high school graduates can also use their Smarter Balanced Assessment scores to obtain
                                    placement instead of taking COMPASS. More details on placement are available at the
                                    <a href="https://www.greenriver.edu/students/academics/assessment-testing-center/">Assessment and Testing Center</a></li>
                                <li>If a student has taken an AP Calculus or Statistics exam in high school at any point
                                    in time and earned a score of 3 or higher, no additional math classes are required for the AAS-T or AA degree.</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <h3>Bachelor's Degrees</h3>
                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <b>What is a BAS Degree?</b>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>A BAS Degree is a 4-year Bachelor’s Degree focused on preparing students for a career.
                                    The BAS has fewer general education requirements than a BS or BA degrees. BAS Degrees are
                                    not generally designed for graduate school. However, Green River has articulation agreements
                                    with several graduate institutions, including Northeastern University in Seattle, Washington
                                    Governors University, and University of Washington-Tacoma. </li>

                                <li>Green River offers two BAS Degrees in <a href="https://www.greenriver.edu/students/academics/degrees-programs/bachelor-of-applied-science/bas-cybersecurity-networking/">
                                        Cybersecurity and Networking
                                    </a> and <a href="https://www.greenriver.edu/students/academics/degrees-programs/bachelor-of-applied-science/bachelors-in-software-development/"> Software Development. </a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <b>How is the BAS in Software Development different from a traditional Computer Science Degree?</b>
                            </button>
                        </h2>

                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>The BAS in Software Development is more focused on real-world skills and technologies
                                    than a traditional Computer Science degree. Students learn theory and also apply what
                                    they are learning in the classroom by designing and building web and mobile applications
                                    for real clients. Additionally, a BAS at Green River College costs about half of a
                                    bachelor's at a state university.
                                </li>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEight">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                <b>What are the Prerequisites for the BAS in Software Development?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                        <div class="card-body">
                            <b>To enter the BAS in Software Development, a student needs to have earned any Associate’s
                                Degree or higher from a regionally accredited institution, and have completed the
                                following prerequisites, or have equivalent industry experience:
                            </b>
                            <ul>
                                <li>Java I (SDEV 218)</li>
                                <li>Java II (SDEV 220)</li>
                                <li>HTML/CSS (SDEV 106)</li>
                                <li>Database Fundamentals (IT 201)</li>
                                <li>Web Programming with JavaScript (SDEV 117)</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNine">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                <b>What if I want a 4-year degree, but I'm not sure which one?</b>
                            </button>
                        </h2>

                    </div>
                    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>If you’re trying to decide between a BAS at Green River, and a Bachelor's Degree at
                                    another institution, we recommend that you take a few quarters of classes that will
                                    transfer to any program while you research and consider your options. There are a
                                    few general education classes that will apply toward any two-year degree. These
                                    include a math class, a writing class (ENGL), and a speech class (CMST), all 100-
                                    level or higher. In addition, all Associate degrees have room for at least 15 credits
                                    of IT electives. While you're taking those classes, visit the schools you're interested
                                    in, talk to your advisor, and talk to students in your prospective programs. Get as much
                                    information as you can before making a decision!
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                <b>What if I want to earn a Bachelor’s in Computer Science at a 4-year University?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>If your goal is to earn a Bachelor’s Degree in Computer Science at a 4-year university,
                                    such as UW or WSU, then you need to talk with an advisor in the Computer Science Department
                                    in Cedar Hall (CH), or a transfer advisor in the Career and Advising Center.</li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingEleven">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                <b>How much does it cost to earn a Bachelor’s Degree at Green River College?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Projected tuition and fees for 4 years full-time study comes to about $25,000,
                                    which is half the cost of earning a 4-year degree at a state university. For a
                                    detailed tuition and fee schedule, visit our tuition and fees page on the official
                                    Green River website.
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <h3>Pre-earned Credits</h3>
                <div class="card">
                    <div class="card-header" id="headingTwelve">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                <b>What if I have earned credits from another institution?</b>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>If you have attended other colleges or universities and would like to use those
                                    credits at Green River, you must request official transcripts from the other colleges
                                    or universities attended to be sent to:
<pre>
    Green River College

    Enrollment Services

    12401 SE 320th St., Auburn, WA 98092
</pre>
                                    You should also request an unofficial copy be sent to yourself for advising purposes.
                                    Once official transcripts are on file at Green River, you must submit a
                                    <a href="https://www.greenriver.edu/students/academics/enrollment-services/transcripts/transcript-evaluation/">Transcript
                                        Evaluation Request</a> form to Enrollment Services. Results will be emailed to you in
                                    approximately 4 weeks. From there, we can determine which of your credits will apply
                                    toward your Green River degree.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThirteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                <b>What if I have Advanced Placement (AP) classes?</b>
                            </button>
                        </h2>

                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>
                                    AP courses are taught by high school teachers who follow course guidelines developed
                                    and published by the College Board. Green River College grants credit in a variety of
                                    subject areas for students who have obtained a particular score on their College Board
                                    Advanced Placement examinations. To learn more, visit
                                    <a href="https://www.greenriver.edu/students/academics/enrollment-services/transcripts/advanced-placement-credit/">Alternative Options for Earning Credit.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFourteen">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                <b>Can I earn credit for my existing knowledge or certifications?</b>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li>Prior Learning Assessment (PLA) is a process for evaluating and assessing a person’s
                                    existing knowledge and competencies obtained through prior nontraditional education,
                                    training, and/or work experience for college credit. An individual’s knowledge and
                                    competencies will be evaluated in relation to the competencies of the program and will
                                    be awarded credit for demonstrated learning outcomes that are appropriate to the course.
                                    To learn more, visit <a href="https://www.greenriver.edu/students/academics/enrollment-services/transcripts/advanced-placement-credit/">Alternative Options for Earning Credit.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <p class="row justify-content-center">

                <button class="btn-lg btn-form collapsed" type="button" data-toggle="collapse" data-target="#questionForm" aria-expanded="false" aria-controls="questionForm">
                    Can't find what you are looking for?
                </button>
            </p>
            <section class="row justify-content-center">
                <div class="col-6 justify-content-center">
                    <div class="collapse" id="questionForm">

                        <form id="contact-form" action="confirm.php" method="post">

                            <!--  Contact info  -->
                            <fieldset class="form-group border p-2">
                                <legend>Contact Information</legend>
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname"
                                           placeholder="Enter first name">
                                    <span class="err" id="err-fname">Please enter a first name</span>

                                </div>
                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname"
                                           placeholder="Enter last name">
                                    <span class="err" id="err-lname">Please enter a last name</span>

                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Email Address</label>
                                    <input type="email" class="form-control" id="emailAddress" name="emailAddress" aria-describedby="emailAddress" placeholder="Enter email">
                                    <span class="err" id="err-emailAddress">Please enter an email address</span>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="questionInput">What are you looking for?</label>
                                <textarea class="form-control" id="questionInput" rows="3" name="questionInput" aria-describedby="questionInput"></textarea>
                                <span class="err" id="err-question">Please enter a question</span>
                            </div>
                            <p class="row justify-content-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </p>
                        </form>

                    </div>
                </div>
            </section>
        </section>

</div>

</div>

<?php
    include('includes/footer.php');
?>

