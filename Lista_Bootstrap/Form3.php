<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

    <h2 class="text-center">Sample Form</h2>

    <form>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Partner Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Partner Email ID</label>
                <input type="email" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Partner Legal Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Partner Mobile</label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label>Partner Address</label>
            <textarea class="form-control"></textarea>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Contract Start Date</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Contract Expiry Date</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Minimum Loan Amount</label>
                <input type="number" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Maximum Loan Amount</label>
                <input type="number" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label>Interest Rate</label>
                <input type="number" class="form-control">
            </div>

            <div class="col-md-6">
                <label>Deposit Amount</label>
                <input type="number" class="form-control">
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-primary">Save</button>
        </div>

    </form>

</div>
</body>
</html>