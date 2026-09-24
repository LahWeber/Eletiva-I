<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 5</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

    <div class="bg-light p-4">

        <h4>Billing address</h4>

        <div class="row">

            <div class="col-md-6">
                <label>First name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Last name</label>
                <input type="text" class="form-control">
            </div>

        </div>

        <div class="mt-3">
            <label>Username</label>

            <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control"
                       placeholder="Username">
            </div>
        </div>

        <div class="mt-3">
            <label>Email (Optional)</label>
            <input type="email" class="form-control"
                   placeholder="you@example.com">
        </div>

        <div class="mt-3">
            <label>Address</label>
            <input type="text" class="form-control"
                   placeholder="1234 Main St">
        </div>

        <div class="mt-3">
            <label>Address 2 (Optional)</label>
            <input type="text" class="form-control"
                   placeholder="Apartment or suite">
        </div>

        <div class="row mt-3">

            <div class="col-md-5">
                <label>Country</label>
                <select class="form-select">
                    <option>Choose...</option>
                    <option>Brasil</option>
                    <option>Estados Unidos</option>
                </select>
            </div>

            <div class="col-md-5">
                <label>State</label>
                <select class="form-select">
                    <option>Choose...</option>
                    <option>São Paulo</option>
                    <option>Paraná</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>Zip</label>
                <input type="text" class="form-control">
            </div>

        </div>

    </div>

</div>
</body>
</html>