# Log Laravel Exceptions in Database

Lib criada com o objetivo de salvar no banco de dados exceptions ocorridas no laravel/lumen.


## Instalação

Adicione a lib no composer.json:

```json
"require": {
    "guhhlemos/log-exceptions": "^1.0"
},
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/guhhlemos/log-exceptions"
    }
],
```

### Laravel 5.5+ Integration

O Package Discovery irá fazer a integração necessária automaticamente.


### Laravel 5+ Integration

Registre o Service Provider em **config/app.php**

```php
'providers' => array(
    Guhhlemos\LogExceptions\LogExceptionsServiceProvider::class,
),
```


### Lumen 5+ Integration

Registre o Service Provider em **bootstrap/app.php**

```php
$app->register(Guhhlemos\LogExceptions\LogExceptionsServiceProvider::class);
```

### Uso

Dependendo da versão do laravel/lumen, o local mais comum para fazer a chamada do ***LogException*** é no arquivo **app/Exceptions/Handler.php**, conforme exemplos abaixo:

```php
namespace App\Exceptions;

use Guhhlemos\LogExceptions\LogExceptions;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    ...

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            LogExceptions::save($e);
        });
    }
}
```

```php

namespace App\Exceptions;

use Exception;
use Guhhlemos\LogExceptions\LogExceptions;
...

class Handler extends ExceptionHandler
{
    ...

    public function report(Exception $exception)
    {
        LogExceptions::save($exception);
        
        parent::report($exception);
    }
}
```

