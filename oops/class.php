<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 14-Mar-17
 * Time: 10:26 PM
 */
class simpleClass {
    //property declaration
    public $var = 'Property declared!';

    //method declaration
    public function method()
    {
        echo $this->var;  //$this is a reference to the calling object
    }
}