## Why Interfaces? (My takeaways at the bottom)
An INTERFACE is not specifically provided for abstraction. That's what a CLASS is used for. 
An INTERFACE is provided so you can describe a set of functions and then hide the final implementation of those functions in an implementing class. This allows you to change the IMPLEMENTATION of those functions without changing how you use it.

For example: I have a database. I want to write a class that accesses the data in my database. I define an interface like this:

interface Database {
function listOrders();
function addOrder();
function removeOrder();
...
}

Then let's say we start out using a MySQL database. So we write a class to access the MySQL database:

class MySqlDatabase implements Database {
function listOrders() {...
}
we write these methods as needed to get to the MySQL database tables. Then you can write your controller to use the interface as such:

$database = new MySqlDatabase();
foreach ($database->listOrders() as $order) {

Then let's say we decide to migrate to an Oracle database. We could write another class to get to the Oracle database as such:

class OracleDatabase implements Database {
public function listOrders() {...
}

Then - to switch our application to use the Oracle database instead of the MySQL database we only have to change ONE LINE of code:

$database = new OracleDatabase();

all other lines of code, such as:

foreach ($database->listOrders() as $order) {

will remain unchanged. The point is - the INTERFACE describes the methods that we need to access our database. It does NOT describe in any way HOW we achieve that. That's what the IMPLEMENTing class does. We can IMPLEMENT this interface as many times as we need in as many different ways as we need. We can then switch between implementations of the interface without impact to our code because the interface defines how we will use it regardless of how it actually works.

# My takeaways:
1. Generally - interfaces allow you to create a set of rules for how classes implement the methods created in an interface. 
    a. If a class implements an interface, it MUST include the methods laid out in the interface within the class.
2. Type Declaration - 
    a. Interfaces can group together classes and rather than having to create some type declaration per class, you can group together the classes with an interface and pass the interface as a type check instead. 
    b. The person making the interfaces has greater control over how people choose to implement the interfaces thus protecting a code base / protecting a design pattern they want to see.
3. Code modification and resusability -
    a. If there is foresight, rather than creating a bunch of classes that become dependent on each other, you can create interfaces that describe a set of functions and the classes implement those functions but its abstracted away in the interface. Now you can change the interface, which will change all of the classes, rather than having to change all of the classes individually. 
