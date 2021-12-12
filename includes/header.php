<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="icon"
              type="image/png"
              href="../images/lilgator.JPG">
    <!-- bootstrap CSS -->

    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/styles.css">
    <link href="styles/sidenav-styles.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/sidebar.css">
    <!--Sidebar scroll css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">

    <title>GRC FAQ <?php echo $name ?></title>


</head>
<body>
<div class="main-container">
<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-0">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" target="_blank" href="https://software.greenrivertech.net"><img src="images/logo.png" alt="Green River Logo"></a>
    <!-- Facebook -->
    <a class="navbar-brand" target="_blank" href="https://www.facebook.com/greenriverdevs/"><img src="images/fb_logo.png" alt="facebook"></a>
    <!--LinkedIn-->
    <a class="navbar-brand" target="_blank" href="https://www.linkedin.com/school/green-river-community-college/"><img src="images/linkedin_logo.png" alt="linkedin"></a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>

        </ul>
        <?php
        if($name == "Admin"){
            echo '<input id="homeButton" type=button onClick="parent.location=\'newfaq.php\'"
                   value="Add a New FAQ">';
        }
        ?>

        <form class="form-inline mt-2 mt-md-0" id="search-form" action="results.php" method="get">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" >
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>


    </div>
</nav>
</div>


