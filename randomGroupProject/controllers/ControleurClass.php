<?php





class ControleurClass {

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
               $O_class=new ClassStudent();
               $O_class->getStudent($file);
               $error='';
               Vue::montrer('helloworld/class', array('class' =>  $O_class->displayClass($O_class->getListStudent()),'error'=>$error));            
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

   

}