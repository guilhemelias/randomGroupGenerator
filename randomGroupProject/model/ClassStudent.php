<?php


class ClassStudent {
    private int $capacity;
    private array $listStudents;
    

    function __construct( int $capacity,array $students) {
        $this->capacity=$capacity;
        $this->listStudents=$students;
    }



    public function randomiseGroup(){

    }
    public function displayClass(){

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



