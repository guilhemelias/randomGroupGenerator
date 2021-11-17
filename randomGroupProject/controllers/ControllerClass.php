<?php

require_once('model/ClassStudent.php');

function randomiseGroup(){

}

function displayClass(){

}


class ControllerClass {

    private $class;
  
    public function __construct() {
      $this->class = new ClassStudent();
    }
  
  }