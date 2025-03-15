<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">Purchase List</h2>

        <table class="table table-bordered table-striped shadow">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Vendor</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Mileage</th>
                    <th>Specification</th>
                    <th>Engine Size</th>
                    <th>Base Price</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($purchases as $purchase)
                <tr>
                    <td>{{ $purchase->id }}</td>
                    <td>{{ $purchase->vendor }}</td>
                    <td>{{ $purchase->make }}</td>
                    <td>{{ $purchase->model }}</td>
                    <td>{{ $purchase->color }}</td>
                    <td>{{ $purchase->mileage }}</td>
                    <td>{{ $purchase->specification }}</td>
                    <td>{{ $purchase->engine_size }}</td>
                    <td>${{ number_format($purchase->base_price, 2) }}</td>
                    <td>
                        <span class="badge 
                            {{ $purchase->status == 'arriving' ? 'bg-warning' : 
                            ($purchase->status == 'in_stock' ? 'bg-success' : 'bg-danger') }}">
                            {{ ucfirst($purchase->status) }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Back to Form Button -->
        <a href="{{ url('/purchases/create') }}" class="btn btn-primary">Add New Purchase</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
