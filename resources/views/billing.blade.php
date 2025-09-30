@include('layouts.header')
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
    @yield('content')
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
                <input type="number" name="quantity" id="quantity" style="width: 50px; height: 40px;">
                <input type="hidden" name="product_price" id="product_price">
                <input type="hidden" name="product_barcode" id="product_barcode">
                <button class="btn btn-primary" onclick="addProduct()">Add</button>
                <div class="d-flex me-0 justify-content-end mb-1 total-billing-div">
                    <p>Total</p>
                    <h3 id="total_rupee"><i class="bi bi-currency-rupee"></i>0.00</h3>
                </div>
                <table class="table table-bordered billing-table-main" id="billing_table">
                    <thead>
                        <th>Product Name</th>
                        <th>Barcode</th>
                        <th>Unit Price in Rs.</th>
                        <th>Quantity</th>
                        <th>Amount in Rs.</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <button class="form-control bg-warning text-center py-1 text-white">Hold Order</button>
                <button class="form-control bg-dark text-center py-1 text-white" onclick="payment()">Continue to
                    Payment</button>
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
            $('#checkbox').select2({
                placeholder: "Search a product",
                allowClear: true,
                ajax: {
                    url: '/products-search',
                    type: 'POST', // changed to POST
                    dataType: 'json',
                    delay: 250,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    data: function(params) {
                        return {
                            search: params.term // search term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: data.map(function(item) {
                                return {
                                    id: item.product_name,
                                    text: item.product_name,
                                    quantity: item.quantity,
                                    product_price: item.product_price,
                                    selling_price: item.selling_price,
                                    product_code: item.product_code
                                };
                            })
                        };
                    },
                    cache: true
                },
                minimumInputLength: 1
            });

            $('#checkbox').on('select2:select', function(e) {
                var data = e.params.data;
                $('#product_price').val(data.product_price);
                $('#quantity').val(data.quantity);
                $('#selling_price').val(data.selling_price);
                $('#product_barcode').val(data.product_code);
            });

            $('#checkbox').on('select2:clear', function() {
                $('#quantity').val('');
                $('#product_price').val('');
                $('#selling_price').val('');
                $('#product_barcode').val('');
            });
        });


        function addProduct() {
            var productName = $('#checkbox').val();
            var quantity = $('#quantity').val();
            var price = $('#product_price').val();
            var barcode = $('#product_barcode').val();

            if (!productName || !quantity || !price) {
                alert("Please select a product and enter quantity.");
                return;
            }
            var total_price = Number(quantity) * Number(price);
            $('#total_rupee').html(`<i class="bi bi-currency-rupee"></i> ${total_price}`);

            var newRow = `<tr>
            <td>${productName}</td>
            <td>${barcode}</td>
            <td><i class="bi bi-currency-rupee"></i> ${price}</td>
            <td>${quantity}</td>
            <td><i class="bi bi-currency-rupee"></i> ${total_price}</td>
            <td><button class="btn btn-warning btn-sm remove-row">Remove</button></td>
            </tr>`;
            $('#billing_table tbody').append(newRow);
            $('.remove-row').last().click(function() {
                $(this).closest('tr').remove();
                updateTotal();
            });
            $('#checkbox').val(null).trigger('change');
            $('#quantity').val('');
            $('#product_price').val('');
            $('#product_barcode').val('');
        }

        function updateTotal() {
            var total = 0;
            $('#billing_table tbody tr').each(function() {
                let amount = $(this).find('td').eq(4).text().replace('₹', '').trim();
                total += Number(amount);
            });
            $('#total_rupee').html(`<i class="bi bi-currency-rupee"></i> ${total}`);
        }

        function payment() {
            var products = [];
            $('#billing_table tbody tr').each(function() {
                alert('Success')
                var row = $(this);
                var product = {
                    product_name: row.find('td').eq(0).text(),
                    barcode: row.find('td').eq(1).text(),
                    unit_price: Number(row.find('td').eq(2).text().replace('₹', '').trim()),
                    quantity: Number(row.find('td').eq(3).text()),
                    amount: Number(row.find('td').eq(4).text().replace('₹', '').trim())
                };
                products.push(product);
            });

            // Print JSON format to console
            console.log(JSON.stringify(products, null, 4));
            $('#billing_table tbody').empty();
        }
    </script>
</body>

</html>
