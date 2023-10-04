<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\LoginHelper;

class HomeController extends Controller {

    private $loggerdUser;

    public function __construct() {
        $this->loggerdUser = LoginHelper::checkLogin();

        if($this->loggerdUser === false) {
            $this->redirect('/login');
        }     
    }

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }
}