<?php
abstract class shape {
    protected $width;
    protected $height;
    
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    abstract public function area();
}

//funciones para calcular//

class triangle extends shape {
    public function area(){
        return ($this->width * $this->height)/2;
    }
}

class rectangle extends shape {
    public function area(){
        return $this->width * $this->height;
    }
}

//objetos//
$triangle = new triangle (4, 5);
$rectangle = new rectangle (3, 3);

echo "El area del triangulo es: " . $triangle->area() . "<br>";
echo "<br>";
echo "El area del rectangulo es: " . $rectangle->area() . "<br>" ;
?>
