<?php

class CustomerBuilder{
    // copy attribute customer
    // value kosong untuk setiap attribute dibuatkan di buildernya

    /**
     * @var string
     */

    private $id;

    /**
     * @var string
     */

    private $firtsName="";

    /**
     * @var string
     */  

    private $lastName="";

    /**
     * @var string
     */

    private $email="";

    /**
     * @var string
     */

    private $phone="";

    /**
     * @var string
     * added new 1
     */

    private $address="";

    /**
     * @var int
     * added new 2
     */

    private $age=0;

    /**
     * Make Setters attribute
     * Kasih (return $this;) biar saat membuat object dengan builder langsung jadi single line.Untuk mengembalikan data attribute.
     *  */

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setFirtsName($firtsName)
    {
        $this->firtsName = $firtsName;
        return $this;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Make function Build
     * @value customer
     */
    public function build():Customer
    {
        return new Customer(
            $this->id,
            $this->firtsName,
            $this->lastName,
            $this->email,
            $this->phone,
            $this->address,
            $this->age
        );
    }
}
