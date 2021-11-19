
<?php





if($A_vue['groups']){?>
<section class=CTN>
  <h4 class="titleSection"> Random Groups</h4>
  <?php    
  foreach ($A_vue['groups'] as $group){
      foreach($group->getListStudent() as  $student){
        echo "<p class='glass'>" .$student->getGender()." ".$student->getLastName()." ".$student->getFirstName()."</p>";
      }
    echo "<br></br>";
    
  }
}
?>

</section>

</section>