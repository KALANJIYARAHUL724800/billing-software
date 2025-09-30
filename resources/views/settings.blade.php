@include('layouts.header')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ assert('style.css') }}">

</head>

<body>
    @yield('content')
    <div class="container">
        <div class="row text-center d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('settings.update') }}" method="POST">
                    @csrf
                    <h4>Settings</h4>
                    <table class="table">
                        <tr>
                            <th>Company Name</th>
                            <td><input type="text" name="company_name" id="" class="form-control"
                                    value="{{ $record['company_name'] }}"></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                <textarea type="text" name="address" id="" class="form-control">{{ $record['address'] }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><input type="text" name="phone" id="" class="form-control"
                                    value="{{ $record['phone'] }}"></td>

                        </tr>
                        <tr>
                            <th>Receipt Message</th>
                            <td><input type="text" name="message" id="" class="form-control"
                                    value="{{ $record['message'] }}"></td>
                        </tr>
                        <tr>
                            <th>GST %</th>
                            <td><input type="text" name="gst" id="" class="form-control"
                                    value="{{ $record['gst'] }}"></td>
                        </tr>
                    </table>
                    <button class="btn btn-primary">Apply Settings</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
