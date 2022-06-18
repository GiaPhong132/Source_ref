<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/user.php');

class RegisterController extends BaseController
{
    function __construct()
    {
        $this->folder = 'register';
    }

    public function index()
    {
        $this->render('index');
    }

    public function checkPost($x)
    {
        if (isset($x) && !empty($x)) return true;
        return false;
    }
    public function submit()
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $retype_password = $_POST['password'];

        if ($password != $retype_password) {
            header('Location: index.php?page=main&controller=register&action=index');
        } else {
            session_start();
            $_SESSION['guest'] = $email;
            User::insert($email, 'public2/images/user/defau.png', $fname, $lname, $gender, $age, $phone, $password);
            header('Location: index.php?page=main&controller=layouts&action=index');
        }
    }



    public function editPass()
    {
        $email = $_POST['email'];
        $newpassword = $_POST['new-password'];
        echo $email . " " . $newpassword .  "\n";
        $change_pass = User::changePassword_($email, $newpassword);
        echo "change_pass";
        header('Location: index.php?page=admin&controller=user&action=index');
    }

    public function delete()
    {
        $email = $_POST['email'];
        $createAt = $_POST['createAt'];
        $delete_user = User::delete($email, $createAt);
        header('Location: index.php?page=admin&controller=user&action=index');
    }
}
