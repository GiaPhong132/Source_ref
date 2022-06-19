<?php
require_once('/xampp/htdocs/Source_code/controllers/admin/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/admin.php');

class AdminController extends BaseController
{
    function __construct()
    {
        $this->folder = 'admin';
    }

    public function index()
    {
        $admin = Admin::getAll();
        $data = array('admin' => $admin);
        $this->render('index', $data);
    }
}
