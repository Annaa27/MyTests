<?php
class Person {
    var $name;
    var $lastName;
    function sayHello(){
         echo'Привет    ';
         echo'How are doing??   ';
         echo'Bye  ';
    }
}
$misha = new Person;
$misha ->name = 'Mihail';
$misha ->lastName ='Petrov';
$misha ->sayHello();


