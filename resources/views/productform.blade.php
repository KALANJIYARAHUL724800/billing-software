<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ assert('style.css') }}">
</head>

<body>
    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif
    <div class="container">
        <div class="row text-center d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('products.insert') }}" method="POST">
                    @csrf
                    <h4>Create New Product</h4>
                    <table class="table prodcut-table-form">
                        <tr>
                            <th>Product Code</th>
                            <td><input type="text" name="product_code" id="" class="form-control">
                                @error('product_code')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td><input type="text" name="product_name" id="" class="form-control">
                                @error('product_name')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td><input type="text" name="product_price" id="" class="form-control">
                                @error('product_price')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Selling Price</th>
                            <td><input type="text" name="selling_price" id="" class="form-control">
                                @error('selling_price')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td><input type="text" name="quantity" id="" class="form-control">
                                @error('quantity')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                    <button class="btn btn-primary" type="submit">Create Product</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
