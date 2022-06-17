<?php
require_once('controllers/admin/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/user.php'); 

class MembersController extends BaseController
{
    function __construct()
    {
        $this->folder = 'members';
    }

    public function index()
    {
        $this->render('index');
    }

    public function addUser()
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        User::insert($email, 'public/img/user/default.png', $fname, $lname, $gender, $age, $phone, $password);
        header('Location: index.php?page=admin&controller=members&action=index');
    }
    public function getAll()
    {
        $data = User::getAll();
        return $data;
    }

    public function changePassword()
    {
        $email = trim($_POST['new-email']);
        $newpassword = trim($_POST['new-password']);
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE user
            SET password = '$password', updateAt = NOW()
            WHERE email = '$email';"
        );
        return $req;
    }
}
