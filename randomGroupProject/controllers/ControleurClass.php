<?php





class ControleurClass {

  public function defautAction()
  {
      $O_converter = new Converter();
      $csvClass=$O_converter->csvToArray();
      $O_creator = new Creator($csvClass); 
      $O_class =  new ClassStudent();
      Vue::montrer('helloworld/class', array('class' =>  $O_class->displayClass($json)));

  }

  
  
  }