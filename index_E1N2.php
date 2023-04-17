<?php
class pokerDice{
    private $figuras = array("As","K","Q", "J","7","8");
    private $tiradas = 0;
    private $ultimaTirada;

    public function throw(){
        $tiroRamdom = rand(0, 5);
        $this->ultimaTirada = $this->figuras[$tiroRamdom];
        $this->tiradas++;
        
    }

    public function shapeName(){
        return $this->ultimaTirada;
    }
    public static function getTotalThrows($pokerDiceArray) {
        $totalThrows = 0;
        foreach ($pokerDiceArray as $pokerDice) {
            $totalThrows += $pokerDice->tiradas;
        }
        return $totalThrows;
   }

}

$pokerDiceArray = array();
for ($i = 0; $i<5;$i++){
$pokerDice = new pokerDice();
$pokerDice->throw();
$pokerDiceArray[] = $pokerDice;
}

foreach($pokerDiceArray as $pokerDice){
    echo "Ultima tirada fue:".$pokerDice->shapeName()."<br>";
}
echo "Total de tiradas: " . pokerDice::getTotalThrows($pokerDiceArray);
?>