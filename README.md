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

[MVC](https://github.com/lucasrmagalhaes/crud_series-php_laravel/blob/main/public/mvc.png)

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

**compact() ->** chave e valor com o mesmo nome, pega o nome e encontra uma váriavel com o mesmo nome e retorna um array.

```php
public function index(Request $request) {
    $series = [
        'Dexter',
        'Lost',
        'GOT'
    ];

    return view('series.index', compact('series'));
}
```

[Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/)
```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
```

**Outra biblioteca:** <br>
[ZURB Foundation](https://get.foundation/index.html) <br>
[GitHub](https://github.com/foundation/foundation-sites)

**Listar todos os comandos:**
```php
php artisan list
```

**Criando uma nova migration:**
```php
php artisan make:migration criar_tabela_series
```

**Executar todas as migrates:**
```php
php artisan migrate
```

**Quais as principais vantagens de um ORM?** <br>
Migração entre SGBDs de forma transparente. Utilizando um ORM, caso a gente precise migrar de SQLite para PostgreSQL, por exemplo, essa migração seria transparente para o nosso código. <br>
Nos poupar de escrever código SQL.

**Salvando os dado(s) do Formulário:**
```php
$serie = Serie::create([
    'nome' => $nome
]);
```

**Outra forma de salvar, pega todos os campos do formulário:**
```php
$serie = Serie::create($request->all());
```

**Ordenar as séries buscadas no banco pelo seu nome (em ordem crescente):**
```php
$series = Serie::query()->orderBy('nome')->get();
```

**Flash Message:** É uma mensagem na sessão HTTP, que durará apenas uma requisição, ou seja, será excluída da sessão na requisição seguinte.

**addslashes() ->** Retorna uma string com barras adicionadas antes de caracteres que precisam ser escapados. <br>
Estes caracteres são: <br>
aspas simples (') <br>
aspas duplas (") <br>
barra invertida (\) <br>
NUL (o byte NUL)

[Font Awesome](https://fontawesome.com/)

**Validate:**
```php
php artisan make:request SeriesFormRequest
```

[Laravel - Validation](https://laravel.com/docs/9.x/validation)

**Quais as vantagens de se utilizar Form Request?** Termos um local específico para definição destas regras, e definirmos mensagens personalizadas de validação.
