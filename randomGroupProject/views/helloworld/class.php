

<?php

if($A_vue['class']){?>
<section class="results">
<section class="CTN">
<h4 class="titleSection" > Students List</h4>
<?php
  foreach ($A_vue['class'] as $student){
    echo "<p class='glass'> " .$student->getGender()." ".$student->getLastName()." ".$student->getFirstName()."</p>";
  }
}

?>

</section>






