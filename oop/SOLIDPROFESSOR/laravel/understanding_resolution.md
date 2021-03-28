We define the dependency, for example:

public function __construct(FooBar $dependency)

We do not pass these dependencies directly: 

we don't do $foo = new FooBar; 
$object = new MyObject($foo);; 

Instead we configure the Laravel's service container and it resolves these dependencies for us
So the resolution here is the process when we ask the service container: "give us FooBar, please" and it goes through it's internal registry and finds out (resolves) what object should actually be created
Why do we do this? Because we don't want to hard code the dependencies.

For example, you can have a class which depends on Mailer. On production you want this Mailer to be SMTPMailer and while testing you want to use MockMailer which writes emails to the file.

So you configure Laravel service container to resolve Mailer as MockMailer locally and to resolve it as SMTPMailer on production.
In MyObject we define some abstract Mailer dependency which is then resolved by the Container into SMTPMailer or MockMailer, depending on the configuration.
