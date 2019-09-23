<?php

class Store{
    private $name;

    private $city;

    private $country;

    private $category;

    public function __construct($name, $city, $country, $category){
        $this->name     = $name;
        $this->city     = $city;
        $this->country  = $country;
        $this->category = $category; 
    }

    /**
     * Method getter center
     */
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
        return $this;
    }

    public function getCity(){
        return $this->city;
    }

    public function setCity($city){
        $this->city = $city;
        return $this;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setCountry($country){
        $this->country = $country;
        return $this;
    }

    public function getCategory(){
        return $this->category;
    }  

    public function setCategory($category){
        $this->category = $category;
        return $category;
    }

    /**
     * Method Clone , prototype
     */
    public function clone():Store{
        // return new Store(
        //     $this->name,
        //     $this->city,
        //     $this->country,
        //     $this->category
        // );

        return clone $this;
        // di cari aja teknologi yang buat clone object.
    }

}