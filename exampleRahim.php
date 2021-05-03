<?php
//урок от Рахима основы ООП(синтаксис) Классы и объекты
//класс состоит из 2 частей: свойств и методов
class Animal
{
    //эти свойства, теже самые переменные
    public $name;
    public $age;

    //конструктор класса
    public function __construct($name, $age){
        $this->name= $name;
        $this->age= $age;
    }

    //это метод, теже самые функций
    public function sayHello()
    {
        echo 'Hi, she is<br>' . $this->name .'and she is '. $this->sayAge();
    }
    public function setName($name)
    {
        $this->name = $name;//Zhanel
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function sayAge(){
        return $this->age;
    }
}

//Внизу всегда отдельно, сверху классы, снизу обьекты
$myAnimal = new Animal('Sapura','28<br>');
$myAnimal2 = new Animal('Dina',27);

// $myAnimal->setName('Dina<br>');
// $myAnimal->setAge('25<br>');

echo $myAnimal->name;
echo $myAnimal->age;
echo $myAnimal2->name;
echo $myAnimal2->age;

