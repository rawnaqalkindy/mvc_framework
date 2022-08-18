<?php

namespace Raunaq; 
use Raunaq\BaseView;

class BaseController {
    public function __construct() {
        $this->view = new BaseView(); 
    }

    public function caller($file, $data = []){
        $this->view->display($file, $data);

    }

}