<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/product.php');

class ServicesController extends BaseController
{
    function __construct()
    {
        $this->folder = 'services';
    }

    public function index()
    {
        $products = Product::getAll();
        $data = array('products' => $products);
        $this->render('index', $data);
    }
}
