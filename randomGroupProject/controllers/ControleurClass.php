<?php





class ControleurClass {

   private  $O_class;

   public function __construct(){
      $this->O_class= new ClassStudent();
   }

   public function defautAction()
   {
   
      $error = '';

      if(isset($_POST["upload_csv"]))
      {
         if($_FILES['file']['name'])
         {
            $file_array = explode(".", $_FILES['file']['name']);
            $extension = end($file_array);
            
            if($extension == 'csv')
            {
               $file = $_FILES['file']['tmp_name'];
               
               $this->O_class->getStudent($file);
               $error='';
              // Vue::montrer('helloworld/class', array('class' =>  $this->O_class->displayClass($this->O_class->getListStudent()),'error'=>$error));            
            }
            else
            {
               $error = 'Only <b>.csv</b> file allowed';
               Vue::montrer('helloworld/class',array('class' =>  null,'error'=>$error));
            }
         }
      }
     // $O_creator = new Creator($csvClass); 
     // $O_class=new ClassStudent();
    //  $O_class->getStudent($file_data);
    //  Vue::montrer('helloworld/class', array('class' =>  $O_class->displayClass($O_class->getListStudent()),'error'=>$error));

   }



   public function randomizeAction(){
      
      echo $this->O_class;
      
      Vue::montrer('helloworld/class', array('class' =>  $this->O_class->displayClass($this->O_class->getListStudent()),'error'=>$this->error));
   }

   

}