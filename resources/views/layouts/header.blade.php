@section('content')
    <div class="container">
        <table class="table table-borderless billing-icons">
            <tr>
                <td>
                    <a href="#"><i class="bi bi-cart4"></i></a>
                    <p>New Sales</p>
                </td>
                <td>
                    <a href="{{ route('listsales.page') }}"><i class="bi bi-card-checklist"></i></a>
                    <p>Lists Sales</p>
                </td>
                <td>
                    <a href="{{ route('salesreport.page') }}"><i class="bi bi-journal-text"></i></a>
                    <p>Sales Report</p>
                </td>
                <td>
                    <a href="{{ route('products.page') }}"><i class="bi bi-database-fill"></i></a>
                    <p>Products</p>
                </td>
                <td>
                    <a href="#"><i class="bi bi-currency-rupee"></i></a>
                    <p>Today's Sales</p>
                </td>
                <td>
                    <a href="{{ route('settings.page') }}"><i class="bi bi-gear-fill"></i></a>
                    <p>Settings</p>
                </td>
                <td>
                    <a href="#"><i class="bi bi-x-circle-fill"></i></a>
                    <p>Account Close</p>
                </td>
                <td>
                    <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-right"></i></a>
                    <p>Logout</p>
                </td>
            </tr>
        </table>
    </div>
@endsection
