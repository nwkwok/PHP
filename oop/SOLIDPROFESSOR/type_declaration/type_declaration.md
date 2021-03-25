## Type Declarations:
Something we use to make sure that a user passes in the correct type of data inside of functions / methods.

Methods:
By using type declarations, we can throw an error if the wrong types are given
    Works with:
        - class/interface names
        - self (used to reference to the same class)
        - array
        - callable
        - boolean
        - float
        - int
        - string
        - iterable
        - object

## Strict Mode:
Say you had:
    public function setName(string $newName){
        ...
    }

If you were to pass in an integer, it would not throw an error message because it is technically possible to wrap the int in double quotes and turn it into a string. Since there is a possibility, it will accept intergers as string. 

To correct this, we need to turn on something called Strict Mode
    declare(strict_types = 1);

By using strict mode, you can now use try/catch method in using the methods in the class.
By including type declarations, it also allows your editor to highlight when the wrong data type is being passed as an argument.


