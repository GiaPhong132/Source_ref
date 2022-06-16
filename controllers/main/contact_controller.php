<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/company.php');

class ContactController extends BaseController
{
    function __construct()
    {
        $this->folder = 'contact';
    }

    public function index()
    {
        $companies = Company::getAll();
        $data = array('companies' => $companies);
        $this->render('index', $data);
    }
}
