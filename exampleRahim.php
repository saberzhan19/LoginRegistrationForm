<?php
//урок от Рахима основы ООП(синтаксис) Классы и объекты
//класс состоит из 2 частей: свойств и методов
class Animal
{
    //эти свойства, теже самые переменные
    public $name;
    public $age;
    const ID = 10;//это константа, к/й значение не меняеться 

    //конструктор класса
    public function __construct($name, Int $age){//Int, String, bool эти типы данных, при к/х выводимые данные не меняються. Например если цифры, то только цифры выводяться
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
    public static function saySomething(){//статичный метод от слова 'static' 
        echo 'She wow - wow';
    }
}

/* //Внизу всегда отдельно, сверху классы, снизу обьекты
$myAnimal = new Animal('Sapura','28<br>');
$myAnimal2 = new Animal('Dina',27);

// $myAnimal->setName('Dina<br>');
// $myAnimal->setAge('25<br>');

echo $myAnimal->name;
echo $myAnimal->age;
echo $myAnimal2->name;
echo $myAnimal2->age;

//Вот так обращаються Константе
echo $myAnimal::ID;
*/
// Animal::saySomething();//статичный метод проще вызвать

// $myAnimal = new Animal('Samal', 'asds');//здесь примеры от типов Int, String, bool 
// echo $myAnimal->age;

/* 
class Univercity{
    public $students;

    public function __construct(array $students){
        var_dump($students);
    }
}
new Univercity(['dady', '123']);//(students:123)так выдает ошибку, но если прописать [''], то нет ошибок */

class Student{
    public $name = 'She is a student';
    public $age = 29;
}

class Univercity{
    public $students;

    public function addStudent(animal $student){//Здесь меняем Student
        echo $student->name;
    }
}

$univer = new Univercity;

$animal = new Animal('Panda', 15);
$student = new Student();

$univer->addStudent($animal);//Здесь меняем $student и от зависимости class Student или Univercity