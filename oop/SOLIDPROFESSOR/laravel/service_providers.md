# Service Providers

## TODOs:
*Friday - Read Laravel Docs and take notes <br />
*Sunday - Utilize Service Providers in a Laravel App

### What are service providers?
Service Providers are the central place for all Laravel application bootstrapping. Your own application, as well as all of Laravel's core services are boostrapped via service providers. 

### Laravel Framework Service Providers
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

### What is an individual Service Provider?
All service providers extend the:
Illuminate\Support\ServiceProvider class
<strong>See ServiceProvder.php to look at this class in this repo</strong> 

<strong>Most</strong> service providers contain a 'register' and a 'boot' method. 

Register = bind things into the service container.
<strong>You should never attempt to register any event listeners, routes or any other pieces of functionality within the reigster method.</strong>

### What is a Service Container?
Service Containers are powerful tools for managing class dependencies or performing dependency injection. 
*Taking a detour on depedency injection :)*
<strong>(See dependency_injection.md for notes on this)</strong>
