<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>Gerenciamento da loja</title>
</head>
<body>
    <div class="box">
        <main>
            <form action="consulta.php" method="get">

                <div class="field">
                    <label class="label" for="FName">Nome:</label>
                    <div class="control">
                        <input class="input" type="text" name="FName" id="FName">
                    </div>
                </div>
                <div class="field">                
                    <label class="label" for="FCargo">Cargo:</label>
                    <div class="control">
                        <input class="input" type="text" name="FCargo" id="FCargo">
                </div>
                </div>
                <div class="field">
                    <label class="label" for="FDataEntradaCargo">Data de Entrada:</label>
                    <div class="control">
                        <input class="input" type="text" name="FDataEntradaCargo" id="FDataEntradaCargo">
                </div>
                </div>
                <div class="field">
                    <label class="label" for="FAnosNaEmpresa">Anos Na Empresa:</label>
                    <div class="control">
                        <input class="input" type="text" name="FAnosNaEmpresa" id="FAnosNaEmpresa">
                </div>
                </div>
                <div class="field">
                    <label class="label" for="FSetor">Setor</label>
                    <div class="control">
                        <input class="input" type="text" name="FSetor" id="FSetor">
                </div>
                </div>
                <div class="field">
                    <label class="label" for="FSalario">Salário</label>
                    <div class="control">
                        <input class="input" type="text" name="FSalario" id="FSalario">
                </div>

                
                </div>
                <div class="field is-grouped">
                
                    <div class="control">
                        <button id="btn-cadastrar" class="button is-link">Cadastrar</button>
                    </div>

                    <div class="control">
                        <button class="button is-link is-light">Cancelar</button>
                    </div>
            </form>
        </main>
    </div>
</body>
</html>