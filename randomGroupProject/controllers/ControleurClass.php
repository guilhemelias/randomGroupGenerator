<?php





class ControleurClass
{
    private $O_class;

    public function __construct()
    {
        $this->O_class= new ClassStudent();
    }


   public function defautAction()
   {
      if (isset($_POST["upload_csv"])) {
          $error = $this->displayClass();
          if ($error) {
              Vue::montrer('helloworld/class', array('class' =>  null,'error'=>$error));
          } else {
              $this->randomize((int)$_POST["randomize"]);
              
              Vue::montrer('helloworld/class', array('class' => $this->O_class->getClass($this->O_class->getListStudent()),'error'=>$error));
              Vue::montrer('helloworld/groups', array('groups' => $this->O_class->getClass($this->O_class->getGroup()),'error'=>$error));
          }
      }
   }

   

   public function displayClass(){
      $error = '';

      if($_FILES['file']['name'])
         {
            $file_array = explode(".", $_FILES['file']['name']);
            $extension = end($file_array);
            
            if($extension == 'csv')
            {
               
               
               $this->O_class->setStudent($_FILES['file']['tmp_name']);
               $error=null;
               return $error;
            }
            else
            {
               $error = 'Only <b>.csv</b> file allowed';
               return $error;
               
            }
         }
   }



   public function randomize(int $nbMax=3){
       {
         $studentArr = (array)$this->O_class->getClass($this->O_class->getListStudent());
         
         shuffle($studentArr); 
         echo $nbMax;
         $groupes = array_chunk($studentArr, $nbMax);
         $this->O_class->setGroup($groupes,$nbMax);
   }
   } 

}