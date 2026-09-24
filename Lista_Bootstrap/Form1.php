<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <form>

        <div class="row">
            <div class="col-md-4">
                <label>First name</label>
                <input type="text" class="form-control" placeholder="Mark">
            </div>

            <div class="col-md-4">
                <label>Last name</label>
                <input type="text" class="form-control" placeholder="Otto">
            </div>

            <div class="col-md-4">
                <label>Username</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <label>City</label>
                <input type="text" class="form-control" placeholder="City">
            </div>

            <div class="col-md-3">
                <label>State</label>
                <input type="text" class="form-control" placeholder="State">
            </div>

            <div class="col-md-3">
                <label>Zip</label>
                <input type="text" class="form-control" placeholder="Zip">
            </div>
        </div>

        <div class="form-check mt-3">
            <input type="checkbox" class="form-check-input">
            <label class="form-check-label">
                Agree to terms and conditions
            </label>
        </div>

        <button class="btn btn-primary mt-3">Submit form</button>

    </form>

</div>

</body>
</html>