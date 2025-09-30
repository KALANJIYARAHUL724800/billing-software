<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body class="login-body">
    <section>
        <div class="col-md-4 dflex mx-auto justify-content-center align-item-center login-form">
            <h5 class="text-center text-dark p-3">Billing Software</h5>
            <table class="table table-borderless">
                <tr>
                    <td><i class="bi bi-person-circle icon"></i></td>
                    <td> <input class="form-control" type="text" id="uname" name="uname"
                            placeholder="Enter username"></td>
                </tr>
                <tr>
                    <td><i class="bi bi-unlock-fill icon"></i></td>
                    <td> <input class="form-control" type="password" id="password" name="password"
                            placeholder="Enter password"></td>
                </tr>
            </table>
            <button class="btn btn-success login-button">Login</button>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
