<?php

class Product{
    private $name;
    private $image;
    private $price;
    private $category;
    
    function __construct($_name, $_image, $_price, $_category){
        
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setImage($_Image){
        $this->image = $_Image;
    }

    public function getImage(){
        return $this->image;
    }

    public function setPrice($_Price){
        $this->price = $_Price;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setCategory($_Category){
        $this->category = $_Category;
    }

    public function getCategory(){
        return $this->category;
    }
}

?>