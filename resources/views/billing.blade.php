<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Billing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <table class="table table-borderless billing-icons">
            <tr>
                <td>
                    <i class="bi bi-cart4"></i>
                    <p>New Sales</p>
                </td>
                <td>
                    <i class="bi bi-card-checklist"></i>
                    <p>Lists Sales</p>
                </td>
                <td>
                    <i class="bi bi-journal-text"></i>
                    <p>Sales Report</p>
                </td>
                <td>
                    <i class="bi bi-database-fill"></i>
                    <p>Products</p>
                </td>
                <td>
                    <i class="bi bi-currency-rupee"></i>
                    <p>Today's Sales</p>
                </td>
                <td>
                    <i class="bi bi-gear-fill"></i>
                    <p>Settings</p>
                </td>
                <td>
                    <i class="bi bi-x-circle-fill"></i>
                    <p>Account Close</p>
                </td>
                <td>
                    <i class="bi bi-box-arrow-right"></i>
                    <p>Logout</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="container-fluid bg-light m-0">
        <p style="font-size: 12px; color: red;" class="text-center">Welcome Administrator</p>
        <h5 class="text-center">Billing Area</h5>
    </div>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 bg-light">
                <select name="" id="checkbox" style="width: 300px; height: 50px;">
                    <option value=""></option>
                </select>
                <input type="text" name="" id="" style="width: 50px; height: 40px;">
                <button class="btn btn-primary">Add</button>
                <div class="d-flex me-0 justify-content-end mb-1 total-billing-div">
                    <p>Total</p>
                    <h3><i class="bi bi-currency-rupee"></i>200</h3>
                </div>
                <table class="table table-bordered billing-table-main">
                    <thead>
                        <th>Product Name</th>
                        <th>Barcode</th>
                        <th>Unit Price in Rs.</th>
                        <th>Quantity</th>
                        <th>Amount in Rs.</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1Kg Freshcream</td>
                            <td>1098171</td>
                            <td>800</td>
                            <td>1</td>
                            <td>800</td>
                            <td><button class="btn btn-warning">Remove</button></td>
                        </tr>
                    </tbody>
                </table>
                <button class="form-control bg-warning text-center py-1 text-white">Hold Order</button>
                <button class="form-control bg-dark text-center py-1 text-white">Continue to Payment</button>
            </div>
            <div class="col-md-4 bg-light">
                <table class="table table-borderless table-stock">
                    <thead>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Available Qty</th>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Freshcream</td>
                        <td>2</td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#checkbox').select2();
            $.ajax({
                url: "your_api_endpoint.php",
                method: "POST",
                dataType: "json", 
                success: function(data) {
                   
                    console.log(data);
                },
                error: function(XHR, textStatus, errorThrown) {
                    console.error("AJAX error:", textStatus, errorThrown);
                },
                complete: function() {
                    console.log("Request complete.");
                }
            });
        });
    </script>
</body>

</html>
