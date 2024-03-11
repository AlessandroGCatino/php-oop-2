<?php

trait Discount{
    private $discount;

    public function setDiscount($minus, $type){

        if (!is_numeric($minus)){
            throw new InvalidArgumentException("Tipo di dato errato, inserisci un numero");
        } else if ($minus < 0){
            throw new Exception("Lo sconto non può essere negativo, inserisci un numero positivo");
        } else {
        $this->discount = $minus . $type;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }
}

?>