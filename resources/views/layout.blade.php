<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/0d70bf7cb0.js" crossorigin="anonymous"></script>

        <title>Controle de Séries</title>
    </head>

    <body>
        <div class="container">
            <div class="mb-2 bg-black" style="padding: 30px 0 30px 0">
                <h1 class="text-center text-white">
                    @yield('cabecalho')
                </h1>
            </div>

            @yield('conteudo')
        </div>
    </body>
</html>
