<?php

class Creator {

    

    function arrayToObj($csvClass)
    {
        foreach ($csvClass as $key=>$value){


            echo "<p>" .$value[0]." ".$value[1]." ".$value[2]."</p>";
          }
    }
    
}