<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Sales</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped listsales-table">
                <thead>
                    <th>S.No</th>
                    <th>Bill Number</th>
                    <th>Date</th>
                    <th>Order Items</th>
                    <th>Total Quantity</th>
                    <th>Total Amount</th>
                    <th>Discount Amount</th>
                    <th>Payment Mode</th>
                    <th>Purchases</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <td>1</td>
                    <td>1658989</td>
                    <td>16-december</td>
                    <td>Fresh cream 1kg</td>
                    <td>1</td>
                    <td>800</td>
                    <td>0</td>
                    <td>Cash</td>
                    <td>View</td>
                    <td><button>Print</button></td>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
