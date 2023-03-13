### Laravel: crie aplicações web em PHP

**Que facilidades um framework full-stack como Laravel pode nos trazer?**
- Auxílio com SQL (usando ORM), logs, tratamento de erros, etc.

**Instalando o Laravel**
```
composer create-project laravel/laravel controle-series ^9
```

**Definindo a primeira rota**
```
php artisan
```

```
php artisan serve
```

```
php artisan serve --host=0.0.0.0 --port=8000
http://localhost:8000
```

**Qual a sintaxe para criar uma nova rota no Laravel?**
```
Route::{verbo http}('{sua rota}', {Código a ser executado});
```

- Nós podemos ter rotas com Route::get, Route::post, Route::put, Route::delete, etc. 
- Todos os verbos HTTP são válidos aqui.