<?php


class ClassStudent extends Model{
    private   $capacity=0;
    private   $listStudents=[];
    private $listGroups=[];
    

    

    
    

    public function setStudent($csv)
    {
      $csvClass=$this->getCsvData($csv);
      $this->capacity=count($csvClass);
      foreach ($csvClass as $value)
      {
        $student =  new Student($value[2],$value[1],$value[0]);
        array_push($this->listStudents,$student);
      }
      
    }

    public function setGroup($groups,$capacity)
    {
      
      foreach ($groups as $group) {        
          $newGroup= new Group($capacity);
          $newGroup->setStudent($group);
          array_push($this->listGroups,$newGroup);      
    }
      
    }

    
    public function getClass($text){
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

    

    public function getGroup() :array
    {
      return $this->listGroups;
    }

    
    
} 



