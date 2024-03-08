<?php

class DogProduct extends Product {

    private $icon = "<i class='fa-solid fa-dog'></i>";

    public function __construct($_name, $_image, $_price, $_category){
        parent::__construct( $_name, $_image, $_price, $_category );
    }

    public function getIcon(){
        return $this->icon;
    }

}

?>