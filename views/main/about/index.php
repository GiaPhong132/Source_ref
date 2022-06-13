<?php
require_once("/xampp/htdocs/Source_Ref/views/main/navbar.php");
?>

<main id="main">
    <!-- ======= About Us Section =======
    End About Us Section -->

    <!-- ======= Our Team Section ======= -->

    <!-- End Our Team Section -->

    <!-- ======= Developing Section ======= -->
<<<<<<< HEAD
    <?php require_once("/xampp/htdocs/Source_ref/views/main/about/about.php");?>
    <!-- End Our Team Section -->
    <?php require_once("info.php"); 
    ?>
=======
    <section id="team" class="team section-bg">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Hình thành <span><strong>và phát triển</strong></span></h2>
                <p>Thành lập từ năm 2004 đến nay, VNGREEN đã trải qua 14 năm phát triển và mở rộng để trở thành một trong những công ty Internet & Công nghệ hàng đầu Việt Nam và Đông Nam Á, với hơn 3200 thành viên.</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-aos="fade-up">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="/Source_ref/public/assets/img/history/1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/Source_ref/public/assets/img/history/2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/Source_ref/public/assets/img/history/3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/Source_ref/public/assets/img/history/5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img src="/Source_ref/public/assets/img/history/6.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </section><!-- End Our Team Section -->

>>>>>>> 7a950b53f3c232a4bbd0c5fa52923f3a6ecf537f
    <!-- ======= Our Clients Section ======= -->
    <?php require_once("clients.php"); ?>
    <!-- End Our Clients Section -->

</main><!-- End #main -->
<?php
require_once('/xampp/htdocs/Source_Ref/views/main/footer.php');
?>