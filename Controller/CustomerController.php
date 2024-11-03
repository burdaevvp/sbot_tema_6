 <?php
namespace Controller;
class CustomerController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function create() {
        $this->loadModel('Customer',"customer");
    }
    public function auth() {
        echo 9;
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/logs/auth.log',$_SERVER["REQUEST_URI"] . "/\n", FILE_APPEND);
    }
}

