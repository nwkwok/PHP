## What is Dependency Injection?
Dependency injection is a fancy phrase that essentially means: class dependencies are 'injected' into the class via the the constructor or a 'setter' method. 

Here is an example: 

<?php

namespace App;

class Client {
    // Internal reference to the service used by this client
    private $service;

    // Constructor
    public function _construct() {
        $this->service = new UserService();
    }

    // Method within this client that uses the services
    public function greet() {
        return "Hello " + $this->service->getName();
    }
}

In the contructor, you can see the $service property will be the value of a new instantiation from the UserService class and $service will now have access to all of the properties and methods of the UserService class. 

This means that class Client now has a dependency on class UserService because if class UserService changes in a substantial way, it would affect class Client.

### Constructor Dependency Injection
Taking the example from above:

<?php

namespace App;

class Client {
    // Internal reference to the service used by this client
    private $service;

    // Constructor
    public function _construct(UserService $service) {
        $this->service = $service;
    }

    // Method within this client that uses the services
    public function greet() {
        return "Hello " + $this->service->getName();
    }
}

Here we are 'injecting' a dependency explicitly into the class by type-hinting the UserService into the constructor.

### How does this work in Laravel?
Lets take a look at an example controller: 

<?php

namespace AppHttpControllers;

use AppUser;
use AppRepositoriesUserRepository;
use AppHttpControllersController;

class UserController extends Controller
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->users->find($id);

        return view('user.profile', ['user' => $user]);
    }
}

In this example, the UserController needs to retrieve users from a data source. So, we will inject a service that is able to retrieve users. In this context, our UserRepository most likely uses Eloquent to retrieve user information from the database. However, since the repository is injected, we are able to easily swap it out with another implementation. We’re also able to easily “mock”, or create a dummy implementation of the UserRepository when testing our application.

The benefit of constructor dependency injection is that we get to choose the dependency that gets passed into the constructor. If we need a different implementation, that's no problem because we can just pass that into the constructor. 

What Laravel does in above example is it will check what dependency has been passed to the constructor using 'Reflection' and will automagically resolve the required dependencies for that class.

The above method resolves automatically. But there’s an alternative way of doing this in Laravel. i.e using service container bindings. So, we can bind UserRepository class into the UserController class like this into the service provider.

### Method Dependency Injection
There will be a case when you only want to inject the depdency into a certain method. In such scenarios, you can use method dependency injection whereby you inject the object to your class through a setter method instead of a constructor. 

public function getSettings(UserSettings $settings)
{
    return $settings->get();
}

As you can see, in this case if we know that the method getSettings is the only method that is going to use UserSettings, we wouldn't need to inject it. So, instead we’ve injected it right into the method itself which Laravel supports out-of-the-box.