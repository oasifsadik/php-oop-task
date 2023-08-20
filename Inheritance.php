<?php
class Shape {
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function GetName(){
        return $this->name;
    }
}

class Circle extends Shape {
    protected $radius;

    public function __construct($name ,$radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle("Circle",5);
$rectangle = new Rectangle("Rectangle",4, 6);

echo $circle->GetName(). " Area: " . $circle->calculateArea() . "<br>";
echo $rectangle->GetName()." Area: " . $rectangle->calculateArea();

?>