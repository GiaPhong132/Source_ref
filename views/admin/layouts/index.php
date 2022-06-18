<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('/xampp/htdocs/Source_code/views/admin/header.php'); ?>

<!-- Add CSS -->


<?php
require_once('/xampp/htdocs/Source_code/views/admin/content_layouts.php'); ?>


<!-- Content Wrapper. Contains page content -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1>Bạn đã đăng nhập vào khu vực Quản trị của BKBLUE</h1>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?page=main&controller=layouts&action=index">Home</a></li>
                        <li class="breadcrumb-item active">Widgets</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="invoice p-3 mb-3">
                <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                        <ul style="list-style: none;">
                            <li><a href="index.php?page=admin&controller=members&action=index" class="fas fa-user-graduate"> Quản lý Thành viên</a></li>
                            <li><a href="index.php?page=admin&controller=comments&action=index" class="fas fa-comments"> Bình luận đánh giá</a></li>
                            <li><a href="index.php?page=admin&controller=user&action=index" class="fas fa-users-cog"> Liên hệ khách hàng</a>
                        </ul>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 invoice-col">
                        <ul style="list-style: none;">
                            <li><a href="index.php?page=admin&controller=products&action=index" class="fas fa-cube"> Quản lý sản phẩm</a></li>
                            <li><a href="index.php?page=admin&controller=news&action=index" class="fas fa-file"> Quản lý bài viết</a></li>
                            <li><a href="index.php?page=admin&controller=company&action=index" class="fas fa-newspaper"> Quản lý thông tin public</a>
                        </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
</div>
<?php
require_once('/xampp/htdocs/Source_code/views/admin/footer.php'); ?>


<!-- Add Javascripts -->

<script type="text/javascript" src="/Source_code/public2/js/admin.js"></script>
</body>

</html>