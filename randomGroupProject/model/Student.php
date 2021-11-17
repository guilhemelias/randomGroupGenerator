<?php


class Student {
    private string $firstName;
    private string $lastName;
    private EnumGender $gender;

    function __construct( string $firstName,string $lastName,string $gender) {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->setGender($gender);
    }
   
    public function setFirstName(string $firstName)
    {
      $this->firstName=$firstName;
    }



    public function getFirstName() :string
    {
      return $this->firstName;
    }


    public function setLastName(string $lastName)
    {
      $this->lastName=$lastName;
    }



    public function getLastName() :string
    {
      return $this->lastName;
    }

    public function setGender(string $gender)
    {
      if($gender === 'M.'){$this->gender=EnumGender::MALE;}
      else{$this->gender=EnumGender::FEMALE;}
      
    }



    public function getGender() :EnumGender
    {
      return $this->gender;
    }
    
} 



