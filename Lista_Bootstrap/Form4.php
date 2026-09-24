<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 4</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

    <h2>Novo Usuário</h2>

    <form>

        <div class="mb-3">
            <label>Nome:</label>
            <input type="text" class="form-control"
                   placeholder="Informe o nome...">
        </div>

        <div class="row">

            <div class="col-md-3">
                <label>CPF:</label>
                <input type="text" class="form-control"
                       placeholder="Informe o cpf...">
            </div>

            <div class="col-md-6">
                <label>Endereço:</label>
                <input type="text" class="form-control"
                       placeholder="Informe o endereço...">
            </div>

            <div class="col-md-3">
                <label>Nível:</label>
                <select class="form-select">
                    <option>--</option>
                    <option>Administrador</option>
                    <option>Usuário</option>
                </select>
            </div>

        </div>

        <div class="row mt-3">

            <div class="col-md-5">
                <label>Email:</label>
                <input type="email" class="form-control"
                       placeholder="Informe o email...">
            </div>

            <div class="col-md-4">
                <label>Senha:</label>
                <input type="password" class="form-control"
                       placeholder="Informe a senha...">
            </div>

            <div class="col-md-3">
                <label>Status:</label>
                <select class="form-select">
                    <option>--</option>
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
            </div>

        </div>

        <div class="text-end mt-3">
            <button class="btn btn-success">Enviar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </div>

    </form>

</div>
</body>
</html>