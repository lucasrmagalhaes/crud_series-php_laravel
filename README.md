### Laravel: crie aplicações web em PHP

**Que facilidades um framework full-stack como Laravel pode nos trazer?**
- Auxílio com SQL (usando ORM), logs, tratamento de erros, etc.

**Instalando o Laravel**
```
composer create-project laravel/laravel controle-series ^9
```

**Definindo a primeira rota**
```php
php artisan
```

```php
php artisan serve
```

```php
php artisan serve --host=0.0.0.0 --port=8000
http://localhost:8000/series
```

**Qual a sintaxe para criar uma nova rota no Laravel?**
```php
Route::{verbo http}('{sua rota}', {Código a ser executado});
```

- Nós podemos ter rotas com Route::get, Route::post, Route::put, Route::delete, etc. 
- Todos os verbos HTTP são válidos aqui.

**Convenções de nome**
```php
php artisan make:controller SeriesController
```

```php
php artisan make:controller PhotoController --resource
```

**Lidando com Request e Response**
```php
$request->get('id');
$request->url();
$request->method();
$request->input();

response('', 302, ['Location' => 'https://google.com']);
redirect('https://google.com');
```

**O que a função response faz?**
- Ela retorna um objeto do tipo ```Response``` com o corpo, status e cabeçalhos.

**Criando um Layout**
```php
php artisan make:component Titulo
```

**O que precisamos fazer para termos um componente do blade?**
- Criar um arquivo .blade.php no diretório resources/views/components.

**Mais funcionalidades**
```
@{{ nome }}

const series = {{ json_encode($series) }};
const series = {{ Js::from($series) }};
```

**Entendendo o conceito - Laravel Mix**
```
npm install
```

**Vite e Mix**
```
npm install laravel-mix --save-dev
```

**Laravel Mix**
- Apesar de ser recomendado pela equipe do Laravel, é um pacote JavaScript.
