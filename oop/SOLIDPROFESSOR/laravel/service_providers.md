# Service Providers

## TODOs:
*Friday - Read Laravel Docs and take notes <br />
*Sunday - Utilize Service Providers in a Laravel App

### What are service providers?
Service Providers are the central place for all Laravel application bootstrapping. Your own application, as well as all of Laravel's core services are boostrapped via service providers. 

Service Providers are the classes where we register our binding to the service container. 

Service Providers are responsible for bootstrapping all of the framework's various components, such as the database, queue, validation and routing components. 

Service providers are truly the key to bootstrapping a Laravel application. The application instance is created, the service providers are registered, and the request is handed to the bootstrapped application. It's really that simple!

### Laravel Framework Service Providers Out of the Box
app.php holds all of the service providers: 

Illuminate\Auth\AuthServiceProvider::class,
Illuminate\Broadcasting\BroadcastServiceProvider::class,
Illuminate\Bus\BusServiceProvider::class,
Illuminate\Cache\CacheServiceProvider::class,
Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
Illuminate\Cookie\CookieServiceProvider::class,
Illuminate\Database\DatabaseServiceProvider::class,
Illuminate\Encryption\EncryptionServiceProvider::class,
Illuminate\Filesystem\FilesystemServiceProvider::class,
Illuminate\Foundation\Providers\FoundationServiceProvider::class,
Illuminate\Hashing\HashServiceProvider::class,
Illuminate\Mail\MailServiceProvider::class,
Illuminate\Notifications\NotificationServiceProvider::class,
Illuminate\Pagination\PaginationServiceProvider::class,
Illuminate\Pipeline\PipelineServiceProvider::class,
Illuminate\Queue\QueueServiceProvider::class,
Illuminate\Redis\RedisServiceProvider::class,
Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
Illuminate\Session\SessionServiceProvider::class,
Illuminate\Translation\TranslationServiceProvider::class,
Illuminate\Validation\ValidationServiceProvider::class,
Illuminate\View\ViewServiceProvider::class,

In every service container, you will find a boot and register method

### Boot()
Actions that assume a built up Laravel

### Register()
You use the register method to register things into the Service Container.

