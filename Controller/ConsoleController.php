<?php 
	namespace Controller;

use \Config\Consts;

class AuthController extends Controller {
    protected $customer;

    protected $auth;

    public function __construct()
    {
        parent::__construct();

        $this->loadModel("Auth", "auth");
    }

    public function removeAuth() {
        $this->auth->removeAllInnactive();
    }
}
?>
