<?php
if($A_vue['class']){
  foreach ($A_vue['class'] as $student){
    echo "<p>" .$student->getGender()." ".$student->getLastName()." ".$student->getFirstName()."</p>";
  }
}




