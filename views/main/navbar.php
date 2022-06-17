<?php
session_start();
if (isset($_SESSION['guest'])) {
    require_once('/xampp/htdocs/Source_code/models/user.php');
    $data = User::get($_SESSION['guest']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKBLUE</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- icon -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="/Source_code/public2/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- themify icon -->
    <link rel="stylesheet" href="/Source_code/public2/plugins/themify-icons/themify-icons.css">
    <!-- Owl Carousel -->
    <link href="/Source_code/public2/plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" media="screen">
    <!-- Owl Carousel Theme -->
    <link href="/Source_code/public2/plugins/owl-carousel/assets/owl.theme.green.min.css" rel="stylesheet" media="screen">
    <!-- Fancy Box -->
    <link href="/Source_code/public2/plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="/Source_code/public2/plugins/aos/aos.css">

    <!-- CSS -->
    <link href="/Source_code/public2/css/layout/navbar.css" rel="stylesheet">
    <link href="/Source_code/public2/css/layout/footer.css" rel="stylesheet">
    <link href="/Source_code/public2/css/layout/hero.css" rel="stylesheet">
    <link href="/Source_code/views/main/about/css/style.css" rel="stylesheet">
    <link href="/Source_code/public2/css/layout/product.css" rel="stylesheet">
    <!-- <link href="/Source_code/views/main/about/css/style.css" rel="stylesheet"> -->
    <link href="/Source_code/public2/css/layout/timeline.css" rel="stylesheet">
    <link href="/Source_code/public2/css/layout/profile.css" rel="stylesheet">
    <!-- <link href="/Source_code/public2/css/layout/stlye.css" rel="stylesheet"> -->
    <!-- <link href="/Source_code/public2/css/layout/main.css" rel="stylesheet"> -->
    <!-- <link href="/Source_code/public2/css/layout/about.css" rel="stylesheet">  -->
    <!--
    <link href="/Source_code/public2/css/layout/wedo.css" rel="stylesheet"> -->
    <!-- <link href="/Source_code/public2/css/layout/responsive.css" rel="stylesheet"> -->
    <!-- <link href="/Source_code/public2/css/layout/services.css" rel="stylesheet">
    <link href="/Source_code/public2/css/layout/info.css" rel="stylesheet">-->
    <!-- <link href="/Source_code/public2/css/layout/timeline.css" rel="stylesheet"> -->
    <!-- <style>
        img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
        }
    </style> -->

</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>BK<b style="color:deepskyblue">BLUE</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php?page=main&controller=layouts&action=index" class="nav-item nav-link active">Home</a>
                <a href="index.php?page=main&controller=about&action=index" class="nav-item nav-link">About</a>
                <a href="index.php?page=main&controller=services&action=index" class="nav-item nav-link">Product</a>

                <?php
                if (!isset($_SESSION['guest']) && !isset($_SESSION['user']))
                    echo '
                    <a href="index.php?page=main&controller=login&action=index" class="nav-item nav-link">Sign In</a>
                    <a href="index.php?page=main&controller=register&action=index" class="nav-item nav-link">Sign Up</a>
                    '

                ?>



            </div>
            <form class="navbar-form form-inline">
                <div class="input-group search-box">
                    <input type="text" id="search" class="form-control" placeholder="Search ">
                    <span class="input-group-addon"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
            </form>
            <div class="navbar-nav ml-auto">

                <?php
                if (isset($_SESSION['guest'])) {
                    echo
                    // '
                    // <div class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="/Source_code/public2/images/HCMUT-BachKhoa-Logo.png" class="avatar" alt="Avatar"> ' . $data->lname . '<b class="caret"></b></a><div class="dropdown-menu"><a href="index.php?page=main&controller=profile&acion=index" class="dropdown-item"><i class="fa-solid fa-user"></i> Profile</a></a><a href="#" class="dropdown-item"><i class="fa-solid fa-calendar"></i> Calendar</a></a><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></a><div class="dropdown-divider"></div><a href="index.php?page=main&controller=login&action=logout" class="dropdown-item"><class="fa-solid fa-arrow-right-from-bracket"></class=>Logout</a></a></div>
                    // ';
                    '
                    <div class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="$data->profile_photo" class="avatar" alt="Avatar"> ' . $data->lname . '<b class="caret"></b></a>
                    <div class="dropdown-menu"><a href="index.php?page=main&controller=profile&acion=index" class="dropdown-item"><i class="fa-solid fa-user"></i> Profile</a></a><a href="#" class="dropdown-item"><i class="fa-solid fa-calendar"></i> Calendar</a></a>
                        ';
                } else if (isset($_SESSION['user'])) {
                    echo  '
                    <div class="nav-item dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="/Source_code/public2/images/HCMUT-BachKhoa-Logo.png" class="avatar" alt="Avatar"> Admin<b class="caret"></b></a><div class="dropdown-menu"></a><a href="#" class="dropdown-item"><i class="fa-solid fa-calendar"></i> Calendar</a></a>
                        ';
                }
                ?>

                <?php
                echo "<img src='$data->profile_photo' class="avatar">";
                ?>

                <?php
                if (isset($_SESSION['user']))
                    echo '
                                <a href="index.php?page=admin&controller=layouts&action=index" class="dropdown-item"><i class="fa fa-sliders"></i> Admin</a>
                                ';

                ?>

                <?php
                if (isset($_SESSION['guest'])) {
                    echo '
                    <div class="dropdown-divider"></div><a href="index.php?page=main&controller=login&action=logout" class="dropdown-item"><class="fa-solid fa-arrow-right-from-bracket"></class=>Logout</a></a></div>
                    ';
                } else if (isset($_SESSION['user'])) {
                    echo '
                    <div class="dropdown-divider"></div><a href="index.php?page=main&controller=login&action=logout" class="dropdown-item"><class="fa-solid fa-arrow-right-from-bracket"></class=>Logout</a></a></div>
                    ';
                }
                ?>
            </div>

        </div>
        </div>






    </nav>