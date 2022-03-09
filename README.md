**Laravel parte 1:** produtividade no desenvolvimento web.

**Preparando o ambiente:** Instalação do PHP, composer, habilitar o pdo_sqlite e criar o projeto com Laravel.

**Iniciando o projeto:**
```
composer create-project --prefer-dist laravel/laravel controle-series 5.8.*
```

**Subindo o servidor de desenvolvimento:**
```
php artisan serve
```

[MVC](https://github.com/lucasrmagalhaes/crud_series-php_laravel/blob/main/controle-series/public/mvc.png)

Model se refere à camada que modela o nosso negócio, ou seja, o domínio e as regras de negócio. 

View é como isso será representado visualmente, e a ligação entre ambos é controlada pela camada Controller.

[ADR (Action, Domain, Responder)](http://pmjones.io/adr/)

O padrão ADR ainda não é tão adotado quanto o MVC, mas a leitura vale à pena e nos faz questionar o que mais podemos melhorar em nossas escolhas de arquitetura.

**Request (Illuminate\Http\Request):**
```php
echo $request->url();
```

```php
/** series?parametro=valor */
echo $request->query('parametro');
```

```php
/** series?parametro=valor&pametro2=valor2 */
var_dump($request->query());
```