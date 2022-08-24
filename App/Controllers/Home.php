<?php 

namespace App\Controllers;

use App\Models\HomeModel;
use Raunaq\BaseController;


class Home extends BaseController
{
    public $model;
    
    public function __construct() {
        $this->model = new HomeModel();
      //  print_r($this->model->getDB());
    }

    // public function printingTable($table){
    //     $sql = 'SELECT * FROM '. $this->table;
    //     $returned = $this->model->getDB()->query($sql); 

    //     print_r($returned);
    // }

    public function index(){
        // echo 'Hello World!';
      //  $this->caller('home/index'); 

    // print_r($this->model->db);

     //$this->printingTable('students');

     $sql = 'SELECT * FROM students';
     $student = $this->model->getDB()->query($sql);
     $result = $student->fetchAll();
     echo '<pre>';
     print_r($result);

    // print_r($result);


    $data = [
      'name' => 'Diana',
      'major' => 'EEE',
      'gender' => 'F',
    ];

    $this->model->create($data, 'students');


    }

}