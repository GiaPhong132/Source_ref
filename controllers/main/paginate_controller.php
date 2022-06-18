<?php
require_once('/xampp/htdocs/Source_code/controllers/main/base_controller.php');
// require_once('/xampp/htdocs/Source_code/models/paginate.php');

class PaginateController extends BaseController
{
    function __construct()
    {
        $this->folder = 'services';
    }

    public function index()
    {

        $conn = mysqli_connect('localhost', 'root', '');

        if (!$conn) {
            die("Connection failed" . mysqli_connect_error());
        } else {
            mysqli_select_db($conn, 'ass_web');
        }

        $limit = 5;
        // update the active page number
        if (isset($_GET["pg"])) {
            $page_number  = (int) $_GET["pg"];
        } else {
            $page_number = 1;
        }

        $initial_page = ($page_number - 1) * $limit;
        // get data of selected rows per page
        $getQuery = "SELECT * FROM product LIMIT $initial_page, $limit";
        $result = mysqli_query($conn, $getQuery);


        $getQuery = "SELECT COUNT(*) FROM product";
        $result_2 = mysqli_query($conn, $getQuery);
        $row_2 = mysqli_fetch_row($result_2);
        $total_rows = $row_2[0];

        $data = array('result' => $result, 'total_rows' => $total_rows, 'limit' => $limit, 'page_number' => $page_number);
        $this->render('index', $data);
    }
}
