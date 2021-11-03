<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="styles/sidenav-styles.css" type="text/css" rel="stylesheet">

    <!--Sidebar scroll css-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <title>GRC FAQ <?php echo $page ?></title>


</head>
<body>
<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-0">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" target="_blank" href="https://software.greenrivertech.net"><img src="images/logo.png" alt="Green River Logo"></a>
    <a class="navbar-brand" target="_blank" href="https://www.facebook.com/greenriverdevs/"><img src="images/fb_logo.png" alt="facebook"></a>
    <a class="navbar-brand" target="_blank" href="https://www.linkedin.com/school/green-river-community-college/"><img src="images/linkedin_logo.png" alt="linkedin"></a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">

            </li>
            <li class="nav-item">

            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="searchbutton">Search</button>
        </form>
    </div>
</nav>
<!--Disclaimer Banner-->
<div class="card text-center border-warning">
    <div class="card-header bg-warning">
        DISCLAIMER
    </div>
    <div class="card-body bg-warning">
        <h5 class="card-title bg-warning">The information provided here is not official or legally binding. This is a resource created by students, for students.</h5>

    </div>
</div>
<!--Jumbotron with page header and image-->
<div class="jumbotron">
    <?php echo $heading ?>
    <?php echo $tagline ?>
</div>
