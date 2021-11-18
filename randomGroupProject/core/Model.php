<?php


abstract class Model
{

    protected static function getCsvData($csv) : array
    {
 
        $O_converter = new Converter();
        $csvClass=$O_converter->csvToArray($csv);

        return $csvClass;
    }
}