### What is a Service Container?
Service Containers are powerful tools for managing class dependencies or performing dependency injection. <br />
<strong>(See Container.php to see Laravel's Container Class)</strong> <br />

Quite a long class with properties and methods that helps us manage our dependencies. The service container helps us manage our dependencies by:

1. Dependency Injection and Auto-Resolving Through the Service Container 
When Laravel creates a controller, it will look at the dependencies 
that are needed and using PHPs built in 'Reflection' + the Service Container it automatically creates the instance of the dependencies needed.
Say that you have a Class that has a dependency and let's say that dependency also has another dependency. Laravel is smart enough to know that it needs to initialize a class for a dependency if, for some reason, that hasn't been created yet. 

2. You can create your own way to auto resolve by binding in information for the instances you want Laravel to create. Laravel gives a cnetral place to sore instantiation information (ServiceProviders)

3. Laravel allows you to enable the binding of interfaces in your Service PRoviders.

4. Rather than using bind() you can use singleton() to share instances. This is great for storing state of an instance vs create a brand new instance every time that object is called to instantiate. 

