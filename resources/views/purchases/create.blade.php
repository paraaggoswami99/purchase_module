<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Form</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <h2 class="text-center text-primary">Purchase Form</h2>

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ url('/purchases') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Vendor:</label>
                                <select class="form-select" name="vendor">
                                    @foreach($purchases as $purchase)
                                        <option value="{{ $purchase->vendor }}">{{ $purchase->vendor }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Make:</label>
                                <select class="form-select" name="make">
                                    @foreach($purchases as $purchase)
                                        <option value="{{ $purchase->make }}">{{ $purchase->make }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Model:</label>
                                <select class="form-select" name="model">
                                    @foreach($purchases as $purchase)
                                        <option value="{{ $purchase->model }}">{{ $purchase->model }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Color:</label>
                                <select class="form-select" name="color">
                                    @foreach($purchases as $purchase)
                                        <option value="{{ $purchase->color }}">{{ $purchase->color }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Mileage:</label>
                                <input type="text" class="form-control" name="mileage">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Engine Size:</label>
                                <input type="text" class="form-control" name="engine_size">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Base Price:</label>
                                <input type="text" class="form-control" name="base_price">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Specification:</label>
                                <textarea class="form-control" name="specification" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Images:</label>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN (for interactive ele
