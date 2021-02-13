<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Estate.com || About Us </title>
    <?php require 'header.view.php' ?>
</head>
<body>

<?php require 'nav.view.php' ?>   

<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/img1.jpg" class="d-block w-100 carousel_img" alt="First Image">
            </div>
            <div class="carousel-item">
                <img src="../images/img2.jpg" class="d-block w-100 carousel_img" alt="Second Image">
            </div>
            <div class="carousel-item">
                <img src="../images/img13.jpg" class="d-block w-100 carousel_img" alt="Third Image">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</header>
 
<div class="container my-4">
    <div class="row">
        <div class="col-sm-5">
            <div class="writing mx-2">
                <h1><i>Welcome to Estate.com!</i></h1>
                <p>At estate.com you can decide of any affordable house of your choice to rent or buy. We will give you the best houses with affordable prices.</p>
            </div> 
        </div>
        <div class="col-sm-1 verticalDivider mx-auto"></div>
        <div class="col-sm-5">
            <p style="text-align:center"> <i>Our Locations</i> </h1>
            <ul class="list-group my-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    West Legon
                    <span class="badge bg-primary rounded-pill">13</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Ridge
                    <span class="badge bg-primary rounded-pill">12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kumasi
                    <span class="badge bg-primary rounded-pill">11</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dansoman
                    <span class="badge bg-primary rounded-pill">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kasoa
                    <span class="badge bg-primary rounded-pill">7</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    East Legon
                    <span class="badge bg-primary rounded-pill">6</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Aiport Residential
                    <span class="badge bg-primary rounded-pill">6</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kwabenya Estate
                    <span class="badge bg-primary rounded-pill">4</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Takorade
                    <span class="badge bg-primary rounded-pill">3</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tema
                    <span class="badge bg-primary rounded-pill">10</span>
                </li>
            </ul>
        </div>
    </div>
</div>     
    
<?php require 'footer.view.php' ?>
</body>
</html>