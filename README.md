## Laravel: crie aplicações web em PHP

### Laravel: criando uma aplicação com MVC

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

**Instalando o Bootstrap**
```
npm install bootstrap
```

```
npm run dev
```

**Qual o propósito da função asset?**
- Nos retornar o caminho de um asset (arquivo estático) que pode inclusive estar em outro domínio.

**Por que não devemos ter informações sensíveis (como credenciais) em nosso código?**
- Pois isso pode expor nossa segurança.
- Porque podemos ter credenciais diferentes em ambientes diferentes.

**Migrations**
```php
php artisan make:migration create_series_table
php artisan migrate
```

**Além de simplesmente executar um CREATE TABLE, quais outras vantagens obtemos ao utilizar migrations?**
- Sincronização dos bancos locais da equipe.
- Versionamento do banco.

**DB Facade**
```php
use Illuminate\Support\Facades\DB;

DB::select('SELECT nome FROM series');
DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie]);
```

**CSRF (Cross-Site Request Forgery)**
- O Laravel possui uma proteção contra um ataque chamado Cross-Site Request Forgery (CSRF).
- Todo formulário que nós enviamos para o Laravel precisa ter uma informação extra: um token.
- Esse token permite que o Laravel verifique que a requisição realmente foi enviada por um formulário do site.
- Felizmente essa informação é simples de se adicionar, bastando usar a diretiva ```@csrf``` do blade.

**Eloquent ORM**
```php
php artisan make:model Serie
```

[Building Queries](https://laravel.com/docs/9.x/eloquent#building-queries)

### Laravel: validando formulários, usando sessões e definindo relacionamentos

**Criando séries**
```php
Serie::create($request->all());
Serie::create($request->only(['nome', 'genero']));
Serie::create($request->except(['_token']));
```
