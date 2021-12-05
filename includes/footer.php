
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="https://greenriver.edu" target="_blank" rel="noopener noreferrer">Green River College</a>
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
                    <a target="_blank" href="https://www.linkedin.com/school/green-river-community-college/">LinkedIn<!--<img src="images/linkedin_logo.png" alt="linkedin">--></a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a target="_blank" href="https://www.facebook.com/greenriverdevs/">Facebook<!--<img src="images/fb_logo.png" alt="facebook">--></a>

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
        <div class="footer-copyright text-center text-white-50 py-3">© 2021 Green River College Technology Program
            <p><a href="login.php">Admin Log In</a></p>
        </div>
    </div>
    <?php
    if(!empty($_SESSION['username'])){
        echo '<ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>';
    }
    ?>


</footer>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="scripts/scripts.js"></script>
<script src="scripts/sidebar.js"></script>
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
<script src="scripts/faqscript.js"></script>
<?php
    if($name == "Admin"){
        echo "<script>
    $('#questions-answers').DataTable(
        {
            responsive: true
        }
    );
</script>";
    }
?>
<?php
    if($name == "Search Results"){
        echo "<script>
        $('#results').DataTable(
            {
                responsive: true
            }
        );
    </script>";
}
?>

</body>
</html>