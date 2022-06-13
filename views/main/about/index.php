<?php
include_once('/xampp/htdocs/Source_Ref/views/main/navbar.php');
?>

<main id="main">
    <!-- ======= About Us Section ======= 
    End About Us Section -->

    <!-- ======= Our Team Section ======= -->
 
    <!-- End Our Team Section -->

    <!-- ======= Developing Section ======= -->
    <?php require_once("/xampp/htdocs/Source_ref/views/main/about/about.php");?>
    <!-- End Our Team Section -->
    <?php require_once("info.php"); 
    ?>
    <!-- ======= Our Clients Section ======= -->
    <?php require_once("clients.php"); 
    ?>
    <!-- End Our Clients Section -->

</main><!-- End #main -->
<?php
include_once('/xampp/htdocs/Source_Ref/views/main/footer.php');
?>