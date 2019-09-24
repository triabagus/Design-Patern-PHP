<?php
class Customer{
    /**
     * @var string
     */

    private $id;

    /**
     * @var string
     */

    private $firtsName;

    /**
     * @var string
     */  

    private $lastName;

    /**
     * @var string
     */

    private $email;

    /**
     * @var string
     */

    private $phone;

    /**
     * @var string
     * added new 1
     */

    private $address;

    /**
     * @var int
     * added new 2
     */

    private $age;

    /**
     * Customer constructor.
     * @param string $id
     * @param string $firtsName
     * @param string $lastName
     * @param string $email
     * @param string $phone
     * @param string $address = "" -> biar tidak error pada object yang lama kasi default value
     * @param int $age = 0 -> biar tidak error pada object yang lama kasi default value
     * 
     * Setelah dibuatkan build() , default valuenya dihapus.
     */
    
    // public function __construct($id, $firtsName, $lastName, $email, $phone, $address="", $age=0)

    public function __construct($id, $firtsName, $lastName, $email, $phone, $address, $age)
    {
        $this->id           = $id;
        $this->firtsName    = $firtsName;
        $this->lastName     = $lastName;
        $this->email        = $email;
        $this->phone        = $phone;
        $this->address      = $address;
        $this->age          = $age;
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }
}