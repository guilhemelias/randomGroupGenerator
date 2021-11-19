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
            } else if (isset($_POST["randomize"])) {
               if (isset($_POST["upload_csv"])){
                  $capacity = filter_var((int)$_POST["randomize"], FILTER_VALIDATE_INT) ?  (int)$_POST["randomize"] : 3 ;
                  $this->randomize($capacity);
      
                     Vue::montrer('helloworld/class', array('class' => $this->O_class->getClass($this->O_class->getListStudent()),'error'=>$error));
                     Vue::montrer('helloworld/groups', array('groups' => $this->O_class->getClass($this->O_class->getGroup()),'error'=>$error));
               }
               
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
         else{
            $error = 'Please enter csv file';
               return $error;
         }
   }



   public function randomize($nbMax){
      {
         $listStudents = (array)$this->O_class->getClass($this->O_class->getListStudent());
         
         shuffle($listStudents); 
         $groupes = array_chunk($listStudents, $nbMax);

         $groupes=$this->equilibrate($groupes,$nbMax);
         $this->O_class->setGroup($groupes,$nbMax);
      }
   } 


   public function equilibrate(array $listgroupes, int $nbMax): array
      {
         $nbGroupe = count($listgroupes)-1;


         if (count($listgroupes[$nbGroupe]) == $nbMax || count($listgroupes[$nbGroupe-1]) <= $nbMax-1 )
         {
            return $listgroupes;
         }
         else{
            while (count($listgroupes[$nbGroupe]) < count($listgroupes[$nbGroupe-1]))
            {
                  $last = array_pop($listgroupes[$nbGroupe-1]);
                  array_push($listgroupes[$nbGroupe], $last);
                  $this->equilibrate($listgroupes, $nbMax);
            }
            return $listgroupes;
         }

      }

}