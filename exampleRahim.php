<?php 
//класс состоит из 2 частей: свойств и методов
class Animal{
    //эти свойства, теже самые переменные
    public $name;
    public $age;

    //это метод, теже самые функций
    public function sheWawa($age) {
        echo 'What is that animal?' . $age;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
    }
}

//Внизу всегда отдельно сверху классы, снизу обьекты
$myAnimal = new Animal;
$myAnimal2 = new Animal;

$myAnimal->setName('Dina');
$myAnimal->setAge(25);

$myAnimal2->setName('Sapura');
$myAnimal2->setAge(29);

echo $myAnimal->name;
echo $myAnimal2->name;
