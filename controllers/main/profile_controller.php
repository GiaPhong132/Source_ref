<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');
require_once('/xampp/htdocs/Source_code/models/user.php');


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


    public function editInfo()
    {
        session_start();
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        $data = User::get($email);


        // Photo
        $target_dir = "public/images/user/";
        $path = $_FILES['fileToUpload']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $id = (string)date("Y_m_d_h_i_sa");
        $fileuploadname = (string)$id;
        $fileuploadname .= ".";
        $fileuploadname .= $ext;
        $target_file = $target_dir . basename($fileuploadname);
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
        }
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allow certain file formats
        if (
            $fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
            && $fileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
        }

        $user = User::get($email);
        $file_pointer = $user->profile_photo;

        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

        if (file_exists($target_file)) {
            User::update($email, $target_file, $fname, $lname, $gender, $age, $phone);
            unlink($file_pointer);
            header('Location: index.php?page=main&controller=layouts&action=index');
        }
        // Update
        else {
            User::update($email, $data->profile_photo, $fname, $lname, $gender, $age, $phone);
            header('Location: index.php?page=main&controller=layouts&action=index');
        }
    }
}
