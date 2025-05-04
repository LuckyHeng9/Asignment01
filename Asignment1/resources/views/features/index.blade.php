<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Features</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
       
        <a href="/show-feature"> <h2>Features</h2></a>
        <a href="{{ route('features.create') }}" class="btn btn-success">+ Add Feature</a>
    </div>

    <div class="row">
        @foreach ($features as $feature)
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <img src="{{ asset('storage/' . $feature->image_path) }}" class="card-img-top w-50 mx-auto mt-3" style="height:80px; object-fit:contain;" alt="Feature Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $feature->title }}</h5>
                    </div>
                    <div class="card-footer d-flex justify-content-around">
                        <a href="{{ route('features.edit', $feature->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('features.destroy', $feature->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
