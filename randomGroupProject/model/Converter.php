<?php

class Converter {

 



    public function csvToArray($csvFile=null)
    {
        try
        {
            $csvFile = array_map('str_getcsv', file('public/cv/eleves.csv'));
        }
        catch(Exception $e)
        {
            die('Erreur csv to array: '.$e->getMessage());
        }
    
    
        return $csvFile; 
    }

    function arrayToObj($array)
    {
        
    }
    
}