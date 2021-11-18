<?php


class ClassStudent {
    private  $capacity;
    private  $listStudents;
    

    function __construct( int $capacity=null,array $students=null) {
        $this->capacity=$capacity;
        $this->listStudents=$students;
    }

    



    public function randomiseGroup(){

    }
    public function displayClass($text){
      return $text;
    }

   
    public function setCapacity(int $capacity)
    {
      $this->capacity=$capacity;
    }

    public function getCapacity() :int
    {
      return $this->capacity;
    }
    
    public function setListStudent(array $listStudents)
    {
      $this->listStudents=$listStudents;
    }

    public function getListStudent() :array
    {
      return $this->listStudents;
    }

    
    
} 



