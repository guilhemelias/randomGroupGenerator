<?php

final class ControleurHelloworld
{
    public function defautAction($id)
    {
        
        $O_helloworld =  new Helloworld();
        Vue::montrer('helloworld/voir', array('helloworld' =>  $O_helloworld->donneMessage($id)));

    }

    public function testformAction(Array $A_parametres = null, Array $A_postParams = null)
    {

        Vue::montrer('helloworld/testform', array('formData' =>  $A_postParams));

    }

}