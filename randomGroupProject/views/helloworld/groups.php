<?php





if($A_vue['groups']){
    
  foreach ($A_vue['groups'] as $group){
      foreach($group->getListStudent() as  $student){
        echo "<p>" .$student->getGender()." ".$student->getLastName()." ".$student->getFirstName()."</p>";
      }
    echo "<br></br>";
    
  }
}
?>