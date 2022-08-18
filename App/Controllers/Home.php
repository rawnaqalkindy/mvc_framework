<?php 

namespace App\Controllers;

use Raunaq\BaseController;

class Home extends BaseController
{
    public function index(){
        // echo 'Hello World!';
        $this->caller('home/index'); 
    }
}