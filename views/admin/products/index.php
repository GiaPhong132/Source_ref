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

<!-- Code -->
<div class="content-wrapper">
    <!-- Add Content -->
    <h1 style="margin-left: 10px">Sản phẩm</h1>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header-->
                        <div class="card-body">
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addUserModal">Thêm mới</button>
                            <div class="modal fade" id="addUserModal" aria-labelledby="addUserModal" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới sản phẩm</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form id="form-add-student" action="index.php?page=admin&controller=products&action=add" enctype="multipart/form-data" method="post">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6"><label>Tên sản phẩm</label><input class="form-control" type="text" placeholder="Tên sản phẩm" name="name" /></div>
                                                    <div class="col-6"><label>Giá</label><input class="form-control" type="number" placeholder="Giá" name="price" /></div>
                                                </div>

                                                <div class="form-group"> <label>Mô tả</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                                <div class="form-group"> <label>Nội dung</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                                <div class="form-group"> <label>Hình ảnh </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                                                <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row"></div>
                            <table id="TAB-product" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá </th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                    $index = 1;

                                    foreach ($product as $item) {

                                        echo
                                        "<tr class=\"text-center\">
                                                    <td>"
                                            . $index .
                                            "</td>
                                                    <td>
                                                       " . $item->name . "
                                                    </td>
                                                    <td>
                                                      " .  $item->price . "
                                                    </td>
                                                    <td>
                                                     " .  $item->description . "
                                                    </td>
                                                    <td>
                                                       " . $item->content . "
                                                    </td>
                                                    <td >
                                                        <img style=\"width: 600px; height:350px;\" src='$item->img'>
                                                    </td>
                                                    <td>
                                                    <button class=\"btn-edit btn btn-primary btn-xs\" style=\"margin-right: 5px\" data-id='$item->id' data-name='$product->name' data-price='$product->price' data-description='$product->description' data-content='$product->content' data-img='$product->img'> <i style=\"font-size:17px;\" class=\"fas fa-edit\" ></i></button>
                                                    <button class=\"btn-delete btn btn-danger btn-xs\" style=\"margin-right: 5px\" data-id='$item->id' ><i style=\"font-size:17px;\" class=\"fas fa-trash\"></i></button>
                                                  </td>
                                                </tr>";
                                        $index++;
                                    }
                                    ?>
                                </tbody>
                                <div class="modal fade" id="EditStudentModal" tabindex="-1" role="dialog" aria-labelledby="EditStudentModal" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Chỉnh sửa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form id="form-edit-student" action="index.php?page=admin&controller=products&action=edit" enctype="multipart/form-data" method="post">
                                                <div class="modal-body">
                                                    <div class="col-12"><label>ID</label> <input class="form-control" type="text" placeholder="Name" name="id" readonly /></div>
                                                    <div class="row">
                                                        <div class="col-6"><label>Tên sản phẩm</label><input class="form-control" type="text" placeholder="Tên sản phẩm" name="name" /></div>
                                                        <div class="col-6"><label>Giá</label><input class="form-control" type="number" placeholder="Giá" name="price" /></div>
                                                    </div>

                                                    <div class="form-group"> <label>Mô tả</label> <textarea class="form-control" name="description" rows="5"></textarea></div>
                                                    <div class="form-group"> <label>Nội dung</label> <textarea class="form-control" name="content" rows="10"></textarea></div>
                                                    <div class="form-group"><label>Url Hình ảnh </label><input class="form-control" type="text" name="imggg" readonly /></div>
                                                    <div class="form-group"> <label> Hình ảnh </label>&nbsp <input type="file" name="fileToUpload" id="fileToUpload" /></div>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-primary formedit" type="submit">Chỉnh sửa</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="DeleteStudentModal" tabindex="-1" role="dialog" aria-labelledby="DeleteStudentModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Xóa</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="index.php?page=admin&controller=products&action=delete" method="post">
                                                <div class="modal-body"><input type="hidden" name="id" />
                                                    <p>Bạn có chắc chắn muốn xóa sản phẩm này?</p>
                                                </div>
                                                <div class="modal-footer"><button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng</button><button class="btn btn-danger btn-outline-light" type="submit">Xóa</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
    </li>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <!-- Sidebar Message -->
</ul>
<!-- End of Sidebar -->