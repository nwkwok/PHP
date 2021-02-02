<?php
/*
class Person
{
    public $name;
    public $email;
}

// Access modifier
    # public - accessed anywhere outside of the class
    # private - only accessed inside of the class
    # protected - only accessed inside of the class or classes extended from it

// Best practice is to set class attributes to private and use a public function that can change the class attributes / methods.

$person1 = new Person;
$person1->name = 'John Doe';
echo $person1->name;
*/

class Person
{
    private $name;
    private $email;
    private static $ageLimit = 40;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        echo __CLASS__ . ' created<br>';
        // __CLASS__ is a magic method that returns the name of the class
        // __CLASS__ will return 'Person'
    }
    public function __destruct()
    {
        echo __CLASS__ . ' destroyed<br>';
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name . '<br>';
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email . '<br>';
    }

    public function getAgeLimit()
    {
        return self::$ageLimit;
    }
}

echo Person::$getAgeLimit();

// $person1 = new Person('Joe', 'jdoe@gmail.com');
// echo $person1->getName();

// $person1->setName('John Doe');
// $person1->setEmail('john@doe.com');
// echo $person1->getName();
// echo $person1->getEmail();

/*
$person1 = new Person;
$person->name = 'John Doe';
echo $person1->name;
*/

// This will return an error saying that this cannot be accessed which is why we need to create public methods to get / set the attributes that are private.

class Customer extends Person
{
    private $balance;

    public function __construct($name, $email, $balance)
    {
        parent::__construct($name, $email, $balance);
        $this->balance = $balance;
        echo 'A new ' . __CLASS__ . ' has been created<br>';
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance . '<br>';
    }
}

// $customer1 = new Customer("Nick Kwok", "nwkwok@gmail.com", 300);

// echo $customer1->getBalance();
