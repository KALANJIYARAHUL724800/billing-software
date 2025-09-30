<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h3 class="text-center">Heading</h3>
                <h6 class="text-center" style="color: rgb(33, 131, 33)">Dear Administrator, Please fill the Opening
                    Balance Details</h6>
                <form action="{{ route('available.insert') }}" method="POST">
                    @csrf
                    <table class="table table-bordered align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>Denomination</th>
                                <th>Count</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 Rupee</td>
                                <td><input type="text" class="form-control" name="one_rupee" id="one_rupee"
                                        onkeypress="one_rupee()">
                                    @error('one_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="one_rupee_mul" id="one_rupee_mul"
                                        on="onTotal()">
                                </td>
                            </tr>
                            <tr>
                                <td>2 Rupee</td>
                                <td><input type="text" class="form-control" name="two_rupee" id="two_rupee">
                                    @error('two_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="two_rupee_mul" id="two_rupee_mul">
                                </td>
                            </tr>
                            <tr>
                                <td>5 Rupee</td>
                                <td><input type="text" class="form-control" name="five_rupee" id="five_rupee">
                                    @error('five_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="five_rupee_mul"
                                        id="five_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>10 Rupee</td>
                                <td><input type="text" class="form-control" name="ten_rupee" id="ten_rupee">
                                    @error('ten_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="ten_rupee_mul" id="ten_rupee_mul">
                                </td>
                            </tr>
                            <tr>
                                <td>20 Rupee</td>
                                <td><input type="text" class="form-control" name="twenty_rupee" id="twenty_rupee">
                                    @error('twenty_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="twenty_rupee_mul"
                                        id="twenty_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>50 Rupee</td>
                                <td><input type="text" class="form-control" name="fifty_rupee" id="fifty_rupee">
                                    @error('fifty_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="fifty_rupee_mul"
                                        id="fifty_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>100 Rupee</td>
                                <td><input type="text" class="form-control" name="hundread_rupee"
                                        id="hundread_rupee">
                                    @error('hundread_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="hundread_rupee_mul"
                                        id="hundread_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>200 Rupee</td>
                                <td><input type="text" class="form-control" name="two_hundread"
                                        id="two_hundread_rupee">
                                    @error('two_hundread_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="two_hundread_mul"
                                        id="two_hundread_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>500 Rupee</td>
                                <td><input type="text" class="form-control" name="five_hundread_rupee"
                                        id="five_hundread_rupee">
                                    @error('five_hundread_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="five_hundread_rupee_mul"
                                        id="five_hundread_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>1000 Rupee</td>
                                <td><input type="text" class="form-control" name="thousand_rupee"
                                        id="thousand_rupee">
                                    @error('thousand_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="thousand_rupee_mul"
                                        id="thousand_rupee_mul"></td>
                            </tr>
                            <tr>
                                <td>2000 Rupee</td>
                                <td><input type="text" class="form-control" name="two_thousand_rupee"
                                        id="two_thousand_rupee">
                                    @error('two_thousand_rupee')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="text" class="form-control" name="two_thousand_rupee_mul"
                                        id="two_thousand_rupee_mul"></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" class="text-end" style="color: red">Grand Total</th>
                                <th><input type="text" class="form-control" id="total" name="total"></th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-primary">Submit</button>
                                </td>
                            </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
