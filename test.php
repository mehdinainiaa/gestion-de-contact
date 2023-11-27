<?php

class Person{

    private $lastName;
    private $age;
    private $email;
    private $phone;
    protected $cdi = "abc"; // acceder inside class
    public $lock;



    function getage(){
        return $this->age;
    }
    function getlastName(){
        return $this->lastName;
    }
    function getemail(){
        return $this->email;
    }
    function getphone(){
        return $this->phone;
    }

    function settage($age){
         $this->age = $age;
    }
    function setlastName($lastName){
         $this->lastName= $lastName;
    }
    function setemail($email){
        $this->email = $email;
    }
    function setphone($phone){
        return $this->phone =$phone;
    }
 

    }


class jdid extends Person
{
// function __construct($cd){
//     $this->cdi =$cd;
// }
}
echo '<pre>';
$person1 = new jdid();
$person1->lock="mahdi1213";

var_dump($person1);
echo '</pre>';
// $person1->settage(19);
// $person1->setlastName("bnogalah");
// $person1->setemail("nainiaamehdi@gmail.com");
// $person1->setphone("077787780");




// var_dump($person1);





