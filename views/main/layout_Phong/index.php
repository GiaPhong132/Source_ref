<?php include_once("../layout_Phong/header.php"); ?>

<?php include_once("../layout_Phong/navbar.php"); ?>

<section id="hero">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner container-slide">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../../public/images/bg-banner-1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Homepage</h5>
                    <p>Place to improve your security.</p>
                    <button class="button effect1">
                        Get Started!
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../../public/images/bg-banner-1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../../public/images/bg-banner-1.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>


<?php include_once("../layout_Phong/main.php"); ?>

<?php include_once("../layout_Phong/footer.php"); ?>