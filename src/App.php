<?php

namespace Raunaq;

class App
{
    // public function __construct()
    // {
    //     echo '<pre>';
    //     print_r($_SERVER);
    //     // exit;

    //     $url = $_SERVER['REQUEST_URI'] ?? $_SERVER['QUERY_STRING'];

    //     $clean_url = explode('/', (filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL)));
    //     print_r($clean_url);
    //     exit;

    //     $controller = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])): 'Home';

    //     $controller_with_namespace = '\App\Controllers\\' . $controller;

    //     if (class_exists($controller_with_namespace)) {
    //       //  echo 'Class exists';

    //         $controller_object = new $controller_with_namespace; 

    //         // if (isset($_GET['method'])){
    //         //     $method =strtolower($_GET['method']);
    //         // } else {
    //         //     $method = 'index';
    //         // }

    //         $method = isset($_GET['method']) ? strtolower($_GET['method']) : 'index';

    //         if (method_exists($controller_object, $method)){
    //           //  echo 'method exists';
    //             $controller_object->$method();
    //         } else {
    //             echo 'method doesnt exist';
    //         }

    //     } else {
    //         echo 'Class does not exist';
    //     }

    // }

    public function __construct()
    {
        // echo '<pre>';
        // print_r($_GET);
        // exit;

        // if (isset($_GET['controller'])) {
        //     $controller = ucfirst(strtolower($_GET['controller']));
        // } else {
        //     $controller = 'Home';
        // }
        
        $controller = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])): 'Home';

        $controller_with_namespace = '\App\Controllers\\' . $controller;

        if (class_exists($controller_with_namespace)) {
          //  echo 'Class exists';

            $controller_object = new $controller_with_namespace; 

            // if (isset($_GET['method'])){
            //     $method =strtolower($_GET['method']);
            // } else {
            //     $method = 'index';
            // }

            $method = isset($_GET['method']) ? strtolower($_GET['method']) : 'index';

            if (method_exists($controller_object, $method)){
              //  echo 'method exists';
                $controller_object->$method();
            } else {
                echo 'method doesnt exist';
            }

        } else {
            echo 'Class does not exist';
        }

    }

}
