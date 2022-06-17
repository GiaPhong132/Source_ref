<?php
require_once('controllers/admin/base_controller.php');

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
