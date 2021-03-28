Practice with concepts around service providers, facades and dependency injection.

1. Create a Laravel App
2. Create MyCustomLogic class in App directory with a constructor and an add method. 
3. Create a service provider
4. Bind this to the service container
5. Add service provider to config/app.php
6. Create a Facade that returns a string of the name of the singleton that we binded to the service container.
7. Add this facade name to the 'aliases' in config/app.php
8. Create a controller and in the constructor, we will inject the Facade as a dependency and have the index method return the add method.
9. Create a simple route that uses that controller to test and see if it works

What was done here was creating a simple class at the app level of a Laravel application that has a simple constructor to assign a value to a property. 

Rather than having to hardcode in the value of the object we're passing in, we can use a ServiceProvider to handle this for us.

In our service provder, we're binding:

$this->app->singleton('my-custom-logic', function(){});

This method tells the service container that we are registering a singleton (which basically means that everytime there is a call to instantiate this particular object, it will come from the same instance allow you to manage state).

Lastly, we added this service provider to the config/app.php.

To practice dependency injection, we created a Facade that returns a string of the singleton that we binded to the service container. We added this Facade to the aliases and then in our controller, we added injected the Fasacde into the constructor of our PageController.