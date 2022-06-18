<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page=admin&controller=login&action=index");
}
?>
<?php
require_once('/xampp/htdocs/Source_code/views/admin/header.php');
require_once('/xampp/htdocs/Source_code/models/user.php');
$data = User::getAll();
?>

<!-- Add CSS -->


<?php
require_once('/xampp/htdocs/Source_code/views/admin/content_layouts.php'); ?>


<!-- Code -->

<div id="content-wrapper" class="d-flex flex-column">
    <!-- Add Content -->
    <!-- Content Header (Page header)-->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý Thành viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?page=main&controller=layouts&action=index">Home</a></li>
                        <li class="breadcrumb-item active">Quản lý Thành viên</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
    </section>
    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Button trigger modal-->
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addAdminModal">Thêm mới</button>
                            <!-- Modal-->
                            <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm mới</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=members&action=addUser" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="email" />
                                                </div>
                                                <div class="form-group">
                                                    <label>First name</label>
                                                    <input class="form-control" type="text" name="fname" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Last name</label>
                                                    <input class="form-control" type="text" name="lname" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input class="form-control" type="number" name="age" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone number</label>
                                                    <input class="form-control" type="text" name="phone_number" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="radio" name="gender" value="1">
                                                    <label class="form-check-label">Male</label>

                                                    <input type="radio" name="gender" value="0">
                                                    <label class="form-check-label">Female</label>

                                                    <input type="radio" name="gender" value="-1">
                                                    <label class="form-check-label">Other</label>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="password" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit">Thêm mới</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <table class="table table-bordered table-striped" id="tab-admin">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Phone number</th>
                                        <th>Last update</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $index = 1;
                                    foreach ($data as $x) {
                                        echo "<tr class='text-center'>";
                                        echo "<td>" . $index++ . "</td>";
                                        echo "<td>" . $x->email . "</td>";
                                        echo "<td>" . $x->fname . "</td>";
                                        echo "<td>" . $x->lname . "</td>";
                                        echo "<td>" . $x->age . "</td>";
                                        echo "<td>";
                                        if ($x->gender == 1) echo "Male</td>";
                                        else if ($x->gender == 0) echo "Female</td>";
                                        else echo "Other</td>";
                                        echo "<td>" . $x->phone . "</td>";
                                        echo "<td>" . $x->updateAt . "</td>";
                                        echo "<td>
											<button type='button' data-toggle='modal' data-target='#EditAdminModal$index' class='btn-edit btn btn-primary btn-xs' style='margin-right: 5px' data-username='$x->email'> <i class='fas fa-edit'></i></button>";
                                        echo '
                                        <div class="modal fade" id="EditAdminModal' . $index . '" tabindex="-1" role="dialog" aria-labelledby="EditAdminModal' . $index . '" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Chỉnh sửa</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <form action="index.php?page=admin&controller=members&action=edit" method="POST">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input class="form-control" type="text" readonly name="email" value=' . $x->email . ' />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>First name</label>
                                                            <input class="form-control" type="text" name="fname" value="' . $x->fname . '" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Last name</label>
                                                            <input class="form-control" type="text" name="lname" value="' . $x->lname . '" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Age</label>
                                                            <input class="form-control" type="text" name="age" value="' . $x->age . '"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Phone number</label>
                                                            <input class="form-control" type="number" name="phone" value="' . $x->phone . '"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Gender</label>
                                                            <br>
                                                            ';
                                        if ($x->gender == 1) {
                                            echo '
                                                            <input type="radio" id="Male" name="gender" checked value="1">
                                                            <label>Male</label>
                                                            &nbsp;&nbsp;&nbsp;<input type="radio" id="Female" name="gender" value="0">
                                                            <label>Female</label>
                                                            <input type="radio" id="Other" name="gender"  value="-1">
                                                            <label>Other</label>

                                                            ';
                                        } else if ($x->gender == 0) {
                                            echo '
                                            <input type="radio" id="Male" name="gender"  value="1">
                                                            <label>Male</label>
                                                            &nbsp;&nbsp;&nbsp;<input type="radio" id="Female" checked name="gender" value="0">
                                                            <label>Female</label>
                                                            <input type="radio" id="Other" name="gender"  value="-1">
                                                            <label>Other</label>
                                      ';
                                        } else {
                                            echo '
                                            <input type="radio" id="Male" name="gender"  value="1">
                                                            <label>Male</label>
                                                            &nbsp;&nbsp;&nbsp;<input type="radio" id="Female"  name="gender" value="0">
                                                            <label>Female</label>
                                                            <input type="radio" id="Other" name="gender" checked value="-1">
                                                            <label>Other</label>
                                      ';
                                        }

                                        echo '
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <input class="form-control" type="password" name="password" />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
                                                        <button class="btn btn-primary" type="submit" >Cập nhật</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        ';

                                        echo "<button type='button' data-toggle='modal' data-target='#DeleteAdminModal$index' class='btn-delete btn btn-danger btn-xs' style='margin-right: 5px' data-username='$x->email'> <i class='fas fa-trash'></i></button>
                                        </td>
                                        <div class='modal fade' id='DeleteAdminModal$index' tabindex='-1' role='dialog' aria-labelledby='DeleteAdminModal$index' aria-hidden='true'>
                                        <div class='modal-dialog' role='document'>
                                            <div class='modal-content bg-danger'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Xóa</h5>
                                                    <button class='close' type='button' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                </div>
                                                <form action='index.php?page=admin&controller=user&action=delete' method='post'>
                                                    <div class='modal-body'>
                                                    <input type='hidden' name='email' value='$x->email'>
                                                    <input type='hidden' name='createAt' value='$x->createAt'>

                                                        <p>Chuẩn bị xoá tài khoản '$x->email'.</p>
                                                        <p>Bạn chắc chưa ?</p>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button class='btn btn-danger btn-outline-light' type='button' data-dismiss='modal'>Đóng lại</button>
                                                        <button class='btn btn-danger btn-outline-light' type='submit'>Xác nhận</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        ";
                                        echo "

                                        ";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- Edit Button -->
                            <!-- <div class="modal fade" id="EditAdminModal" tabindex="-1" role="dialog" aria-labelledby="EditAdminModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Chỉnh sửa</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=edit" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" name="new-email" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="new-password" />
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-primary" type="submit" href="index.php?page=admin&controllers=members&action=changePassword">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Delete Button  -->
                            <!-- <div class="modal fade" id="DeleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="DeleteAdminModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Xóa</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="index.php?page=admin&controller=admin&action=delete" method="post">
                                            <div class="modal-body">
                                                <input type="hidden" name="username" />
                                                <p>Bạn chắc chưa ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger btn-outline-light" type="button" data-dismiss="modal">Đóng lại</button>
                                                <button class="btn btn-danger btn-outline-light" type="submit">Xác nhận</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
</div>
</div>


<!-- Add Javascripts -->
<script src="/Source_code/public/js/admin/index.js"></script>
<script type="text/javascript" src="/Source_code/public2/js/admin.js"></script>
</body>

</html>