<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<?php
$page = "Search Results";
$heading = "<h1>Search Results</h1>";
include('includes/header.php');

require("/home/rottenco/db-creds.php");

$cnxn = mysqli_connect($host, $user, $password, $database)
or die ("Connected to Database!");
?>

<!--keywords-->
<div class="container">
    <div class="container">
        <table id="results" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            </thead>
            <tbody>
        <?php
        $search = $_GET['search'];
        echo "<h2>You searched:</h2>";
        echo "<h3><text-align: center>'$search'</h3>";

        //$searchTerm = $_GET['search'];

        $sql = "SELECT * FROM faq WHERE question LIKE '%$search%' OR answer LIKE '%$search%'";
        $result = mysqli_query($cnxn, $sql);
        foreach($result as $row) {
            $question = $row['question'];
            $answer = $row['answer'];


        }




        echo "
        <tr>
            <td>$question</td>
            <td>$answer</td>
        <tr>"

        ?>

    </div>


    <div class="container text-center">
        <!--Header-->
        <div class="justify-content-start">

            <!-- Start of Footer -->
            <!-- Footer -->
            <footer class="fixed-bottom page-footer font-small indigo">

                <!-- Footer Links -->
                <div class="container">

                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

                        <!-- Grid column -->
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="https://greenriver.edu"  target="_blank" rel="noopener noreferrer">Green River College</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="https://www.greenriver.edu/students/academics/degrees-programs/bachelor-of-applied-science/bachelors-in-software-development/" target="_blank" rel="noopener noreferrer">About Us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="https://www.linkedin.com/school/green-river-community-college/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="https://www.facebook.com/greenriverdevs/" target="_blank" rel="noopener noreferrer">Facebook</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 mb-3">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="https://www.greenriver.edu/privacy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                            </h6>
                        </div>

                    </div>

                    <!-- Copyright -->
                    <div class="footer-copyright text-center text-white-50 py-3">Â© 2021 Green River College Technology Program
                    </div>
                </div>


            </footer>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="scripts/scripts.js"></script>
<script src="scripts/sidebar.js"></script>
<script src="//code.jquery.com/jquery-3.5.1.js"> </script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="Scripts/script.js"></script>
<script src="Scripts/script2.js"></script>
<script>
    $('#results').DataTable(
        {
            responsive: true
        }
    );
</script>

</body>
</html>