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

class Customer extends Person {
    private $rewardLevel;
    private $moneySpent;

    public function __construct($name, $phone, $email, $rewardLevel, $moneySpent)
    {
        parent::__construct($name, $phone, $email);
        $this->rewardLevel = $rewardLevel;
        $this->moneySpent = $moneySpent;
    }

    public function setRewardLevel($rewardLevel)
    {
        $this->rewardLevel = $rewardLevel;
    }

    public function getRewardLevel(){
        return $this->rewardLevel;
    }

    public function setMoneySpent($moneySpent)
    {
        $this->moneySpent = $moneySpent;
    }

    public function getMoneySpent(){
        return $this->moneySpent;
    }

}

class Department {

    private $name;
    private $extention;

    public function __construct($name, $extention)
    {
       $this->name = $name;
       $this->extention = $extention;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setExtention($extention)
    {
        $this->extention = $extention;
    }

    public function getExtention(){
        return $this->extention;
    }

}

class Employee extends Person {

    private $dateOfBirth;
    private $department;

    public function __construct($name, $phone, $email, $dep, $dateOfBirth)
    {
        parent::__construct($name, $phone, $email);
        //this would search the database for an ID, and set things that way instead
        $this->department = new Department($dep, 123);
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDepartment(){
        return $this->department;
    }
}

class ZipCode {
    private $zip;
    private $city;
    private $state;

    public function __construct($zip, $city, $state)
    {
        $this->zip = $zip;
        $this->city = $city;
        $this->state = $state;

    }

    public function getZip(){
        return $this->zip;
    }

    public function getCity(){
        return $this->city;
    }

    public function getState(){
        return $this->state;
    }
}

class Address {

    private $streetAddress;
    private $zipCode;

    public function __construct($streetAddress, $zip, $city = null, $state=null)
    {
        $this->streetAddress = $streetAddress;
        //overload
        if(!$state){
            $this->zipCode = new ZipCode($zip, "Philly", "PA");
        } else {
            $this->zipCode = new ZipCode($zip, $city, $state);
        }
    }

    public function getZipCode(){
        return $this->zipCode;
    }

}

$someone = new Person("Me", "123-3245-344", "me@me.com");
$aSpender = new Customer("Big Buyer", "123-543-6635", "sdfkjh@ksdfhj", 5, 123.32);
$aWorker = new Employee("Working Hard", "213-654-233434", "sdklfj@ksjdf", "crafts", "04-21-1999");
$somePlace = new Address("123 Jersey Lane", 65412, "Camden", "NJ");
$otherPlace = new Address("453 Place Road", 19032);

echo "{$aWorker->getDepartment()->getExtention()} is the extention for the {$aWorker->getDepartment()->getName()} department.\r";

echo "<br>";

echo "A Spender, spent \${$aSpender->getMoneySpent()}.\n";
echo "</br>";
echo $someone->getEmail();
echo "<br>";
echo $somePlace->getZipCode()->getCity();
echo "<br>";
echo $otherPlace->getZipCode()->getCity();

?>
