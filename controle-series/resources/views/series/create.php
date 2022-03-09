<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Controle de Séries</title>
    </head>

    <body>
        <div class="container">
            <div class="mb-2" style="background-color: black; color: white; text-align: center; padding: 10px 0 10px 0">
                <h1>Adicionar série</h1>
            </div>

            <form action="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome">

                    <button class="btn btn-primary mt-2">Adicionar</button>
                </div>
            </form>
        </div>
    </body>
</html>
