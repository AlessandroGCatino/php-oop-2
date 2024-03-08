<?php

class CatProduct extends Product {

    private $icon = "<i class='fa-solid fa-cat'></i>";

    public function __construct($_name, $_image, $_price, $_category){
        parent::__construct( $_name, $_image, $_price, $_category );
    }

    public function getIcon(){
        return $this->icon;
    }

}

?>