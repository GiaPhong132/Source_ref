<?php
require_once("/xampp/htdocs/Source_code/views/main/navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKBLUE</title>






</head>

<body>
    <section id="home-slider">
        <div id="slider" class="sl-slider-wrapper">

            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

                <div class="bg-img bg-img-1"></div>

                <div class="slide-caption">
                    <div class="caption-content">
                        <h2 class="animated fadeInDown">IMPROVE YOUR POWER</h2>
                        <span class="animated fadeInDown">Beautiful and Powerful environment developmentgit</span>
                    </div>
                </div>

            </div>
        </div><!-- /slider-wrapper -->

    </section>

    <section class="section products">
        <center>


            <div class="container">
                <br>
                <div>
                    <div class="section-title">
                        <h2>PRODUCTS FROM BKBLUE</h2>
                        </>
                        <div class='container d-flex justify-content-center mt-50 mb-50'>
                            <div class='col-md-12'>
                                <?php
                                foreach ($result as $row) {
                                    echo "
        <div class='card card-body'>
            <div class='media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row'>
            <div class='mr-2 mb-3 mb-lg-0'>
                <img src='/Source_code/"  . $row['img'] . "'width='150' height='150'>
            </div>
            <div class='media-body'>
                    <h6 class='media-title font-weight-semibold'>
                        <a href='#' data-abc='true'>" . $row['name'] . "</a>
                    </h6>
                    <p class='mb-3'>" . $row['description'] . "</p>";

                                    echo '
            <p>' . $row['content'] . '</p>
            ';

                                    echo "
                    </div>
            <div class='mt-3 mt-lg-0 ml-lg-3 text-center'>
                    <h3 class='mb-0 font-weight-semibold'>$" . $row['price'] . "/year</h3>
                    <div>";
                                    // for ($i = 0; $i < $row->rating; $i++) {
                                    //     echo " <i class='fa fa-star'></i>";
                                    // }
                                    echo "
                    </div>
                    <div class='text-muted'></div>
                    <button type='button' class='btn btn-warning mt-4 text-white'><i class='icon-cart-add mr-2'></i> Download Now</button>
                </div>
        </div>
    </div>
 ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $total_pages = ceil($total_rows / $limit);

                    $pageURL = "";

                    if ($page_number >= 2) {

                        echo "<a href='index.php?page=main&controller=paginate&action=index&pg=" . ($page_number - 1) . "'> Prev </a>";
                    }

                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page_number) {
                            $pageURL .= "<a class = 'active' href='index.php?page=main&controller=paginate&action=index&pg=" . $i . "'>" . $i . " </a>";
                        } else {
                            $pageURL .= "<a href='index.php?page=main&controller=paginate&action=index&pg=" . $i . "'>

                                        " . $i . " </a>";
                        }
                    };
                    echo $pageURL;
                    if ($page_number < $total_pages) {
                        echo "<a href='index.php?page=main&controller=paginate&action=index&pg=" . ($page_number + 1) . "'>  Next </a>";
                    } ?>

                </div>

                <div class="inline">

                    <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page_number . "/" . $total_pages; ?>" required>

                    <button onClick="go2Page();" style="color: green;">Go</button>

                </div>

            </div>

            </div>

            </div>

        </center>

        <script>
            function go2Page() {
                var page = document.getElementById("page").value;
                page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
                window.location.href = 'index.php?page=main&controller=paginate&action=index&pg=' + page;
            }
        </script>
    </section>
</body>

</html>



<?php include_once("/xampp/htdocs/Source_code/views/main/footer.php"); ?>

<!-- <div class="blog-pagination">
    <ul class="justify-content-center">
        <li><a href="index.php?page=main&controller=paginate&action=index&pg=1">1</a></li>
        <li><a href="index.php?page=main&controller=paginate&action=index&pg=2">2</a></li>
        <li><a href="index.php?page=main&controller=paginate&action=index&pg=3">3</a></li>
    </ul>
</div> -->