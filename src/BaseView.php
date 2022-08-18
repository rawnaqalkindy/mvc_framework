<?php

namespace Raunaq;

class BaseView {
    public  function display($template, $data = [])
    {
        $file = ROOT_PATH.'/App/Views/'.$template.'.php';
        if (file_exists($file)){
             echo 'File exists';
            require_once $file;
        } else {
          //  print_r($file);
            echo 'File does not exist';
        }
        
    }
}
