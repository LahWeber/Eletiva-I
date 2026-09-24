<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

    <form>

        <div class="row">

            <div class="col-md-1">
                <label>Código</label>
                <input type="text" class="form-control" value="32">
            </div>

            <div class="col-md-5">
                <label>Nome</label>
                <input type="text" class="form-control"
                       placeholder="Nome Completo do Cliente">
            </div>

            <div class="col-md-4">
                <label>E-mail</label>
                <input type="email" class="form-control"
                       placeholder="cliente@dominio.com">
            </div>

            <div class="col-md-2">
                <label>CPF</label>
                <input type="text" class="form-control"
                       placeholder="Só números">
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-md-2">
                <label>Nº Celular</label>
                <input type="text" class="form-control"
                       placeholder="Nº do celular">
            </div>

            <div class="col-md-2">
                <label>Nº Telefone fixo</label>
                <input type="text" class="form-control"
                       placeholder="Nº telefone">
            </div>

            <div class="col-md-2">
                <label>CEP</label>
                <input type="text" class="form-control"
                       placeholder="ex:88308070">
            </div>

            <div class="col-md-2">
                <label>Logradouro</label>
                <input type="text" class="form-control"
                       placeholder="ex: Rua 1400">
            </div>

            <div class="col-md-1">
                <label>Nº</label>
                <input type="text" class="form-control"
                       placeholder="Nº">
            </div>

            <div class="col-md-3">
                <label>Bairro</label>
                <input type="text" class="form-control"
                       placeholder="Bairro">
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-md-3">
                <label>Cidade</label>
                <input type="text" class="form-control"
                       placeholder="Cidade">
            </div>

            <div class="col-md-1">
                <label>UF</label>
                <input type="text" class="form-control"
                       placeholder="UF">
            </div>

            <div class="col-md-2">
                <label>Status</label>
                <select class="form-select">
                    <option>Selecione</option>
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
            </div>

        </div>

        <div class="text-end mt-3">
            <button type="reset" class="btn btn-danger">Resetar</button>
            <button type="button" class="btn btn-success">Próximo</button>
        </div>

    </form>

</div>
</body>
</html>