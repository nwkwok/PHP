# Abstract Class
An abstract class is a class that is only going to be used if another class is going to extend from it. 

Abstract classes are a way that we can structure or create behavior for certain classes that we know only need to get accessed from certain classes and not creating objects within our code. 

I think another way of saying it would be:
You cannot instantiate an object from a abstract class to get its properties and methods. The only way you can get properties and methods from an abstract class is if you extend a class from the abstract class.

Another rule with abstract classes is if we declare a function as abstract:

1. The entire class must become an abstract class
2. It means that whatever class is extending from this abstract class MUST incorporate that abstract function into the class.

We do this in order to make sure that methods get named properly and, if certain methods depend on a certain method, we can make a rule that something must be included. 

It sounds like at the end of the day, you're able to do similar things with interfaces as you are with abstract classes. So maybe it comes down to design choice of how you go about the implementation? 