<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');

class ProfileController extends BaseController
{
    function __construct()
    {
        $this->folder = 'profile';
    }

    public function index()
    {
        $this->render('index');
    }

    public function editProfile()
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
    }
}
