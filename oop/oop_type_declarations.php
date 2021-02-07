<?php
# used in order to make sure that user puts in the right data types in a property or method

/* Methods
    By using type declaration, we can throw an error if wrong type is given
        Works with:
            - class/interface names
            - self (used to reference to same class)
            - array
            - callable
            - bool
            - float
            - int
            - string
            - iterable
            -object

    PHP is dynamically written -- meaning you do not HAVE to declare the data type for something because it will be interpretted. 
    However you can change PHP to do this by adding:

        declare(strict_types = 1); 

    To your PHP script
*/

class Individual
{

    public $name;
    public $eyeColor;
    public $age;

    public function setName(string $newName)  # With type_declaration, if you put in an 'int' instead of 'string' then it will throw an error.
    {
        $this->name = $newName;
    }
    public function getName()
    {
        return $this->name;
    }
}

# With type declarations, you can now do error catching when you try to instantiate a new object

$individual1 = new Individual();

try {
    $individual1->setName(2);
    echo $individual1->getName();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}


# Summary: type_declaration allows you to specify what data types get passed into properties or methods
# function functionName(datatype $argument)