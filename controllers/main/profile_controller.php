<?php
require_once('controllers/main/base_controller.php');

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
}
