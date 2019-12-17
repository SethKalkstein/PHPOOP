<?php 

class Person {
    private $name;
    private $phone;
    private $email;

    public function __construct($name, $phone, $email) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

}

$someone = new Person("Me", "123-3245-344", "me@me.com");

echo $someone->getEmail();

?>
