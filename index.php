<html>  Привет!!! Страница<br/>
    
    
</html>

<?php
echo 'Sergei';

echo 'Sergei';

echo 'Sergei';

echo '<br/>2 ====================================<br/>';

$name = 'Anna';
$lastname = 'Petrova';
echo $name;
echo $name;
echo $name;

echo '<br/>3 ====================================<br/>';

$person
        = [
            "name" => 'Anna',
            "lastName" => 'Petrova'
        ];

        echo
$person['name'];
        echo '<br/>';
        echo $person['lastName'];
        
echo '<br/>5 ====================================<br/>';
function sayHello(){
echo'Привет';
echo'How are doing??';
echo'Bye';
}
sayHello();


echo '<br/>6 ====================================<br/>';

class Person
{
    var $name='Anna';
    var $lastName='Petrova';
    
    function sayHello()
    {
     echo'Привет';
     echo'How are doing??';
     echo'Bye';   
    }
}
$misha=new Person;
echo $misha->lastName;
echo $misha->sayHello();
        
       
                
