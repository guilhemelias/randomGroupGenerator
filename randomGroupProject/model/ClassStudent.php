<?php


class ClassStudent extends Model{
    private   $capacity=0;
    private   $listStudents=[];
    

    

    
    

    public function getStudent($csv)
    {
      $csvClass=$this->getCsvData($csv);
      foreach ($csvClass as $value)
      {
        $student =  new Student($value[2],$value[1],$value[0]);
        array_push($this->listStudents,$student);
      }
      
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



