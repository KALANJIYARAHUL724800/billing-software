@include('layouts.header')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    @yield('content')
    <div class="container-fluid">
        <div class="d-flex align-items-center py-2">
            <button class="btn btn-primary ms-auto" onclick="createProduct()">+ Create New
                Product</button>
        </div>
        <div class="d-flex align-items-center py-2">
            <p class="mb-0">Show</p>
            <select name="" id="" style="height: 25px; width: 50px;" class="mx-1">
                <option value=""></option>
            </select>
            <p class="mb-0 me-2">entries</p>
            <div class="ms-auto d-flex align-items-center">
                <label class="mb-0 me-1">Search</label>
                <input type="text">
            </div>
        </div>
        <table class="table table-bordered product-table p-0 m-0">
            <thead>
                <th>Sno</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Price in Rs.</th>
                <th>Available Qty</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($allProducts as $products)
                    <tr>
                        <td>{{ $products['id'] }}</td>
                        <td>{{ $products['product_code'] }}</td>
                        <td>{{ $products['product_name'] }}</td>
                        <td>{{ $products['product_price'] }}</td>
                        <td>{{ $products['quantity'] }}</td>
                        <td>
                            <button class="btn btn-warning"
                                onclick="window.location.href='{{ url('edit-products/' . $products['id']) }}'">
                                Edit
                            </button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script src="{{ asset('index.js') }}"></script>
</body>

</html>
