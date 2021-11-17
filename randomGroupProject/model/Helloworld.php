<?php

class Helloworld
{
    private $_S_message = "Hello World";

    public function donneMessage($id)
    {
        return $this->_S_message."".$id ;
    }

}