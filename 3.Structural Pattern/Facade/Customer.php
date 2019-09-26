<?php
class Customer{
    /**
     * @var string
     */

    private $id;

    /**
     * @var string
     */

    private $name;

    /**
     * @var string
     */  

    private $email;

    public function __construct($id, $name, $email)
    {
        $this->id           = $id;
        $this->name         = $name;
        $this->email        = $email;
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }
}