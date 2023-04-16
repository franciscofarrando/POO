<?php
class employee {
    private $name;
    private $wage;

    public function initialize ($name, $wage) {
        $this->nombre=$name;
        $this->salario=$wage;
    }
    public function print (){
        echo $this->nombre;
        echo '<br>';
        echo $this->salario;
        echo '<br>';
        if($this->salario > 6000){
            echo "Debe pagar impuesto";
            
        }else{
            echo "NO debe pagar impuesto";
        }
    }
}
$emp1 = new employee();
$emp1->initialize('Pedro', 6000);
$emp1->print();
?>