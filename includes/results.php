<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="icon" type = "image/png" href="../images/lilgator.JPG">
</head>
<body>

</html><div class=container class=text-center>
</div>

<div class="container text-center">
    <!--Header-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="https://software.greenrivertech.net"><img src="../images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" id="search-form" class="form-inline" action="../includes/results.php" method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="search" aria-label="search" id="uinput" name="uinput">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchbutton">Search</button>
            </form>
        </div>
    </nav>
    <!--Jumbotron with page header and image-->
    <section class="jumbotron">
        <div class="container">
            <div class="row text-center">
                <h1>Search Results</h1>
            </div>
        </div>
    </section>

    <!--keywords-->
    <div class="container">
    <h2>Your keywords:
        <?php echo $_GET["uinput"]; ?>
    </h2>
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
                <div class="footer-copyright text-center text-white-50 py-3">© 2021 Green River College Technology Program
                </div>
            </div>


        </footer>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="Scripts/script.js"></script>
<script src="Scripts/script2.js"></script>

</body>
</html>