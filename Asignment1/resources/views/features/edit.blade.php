<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Feature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Feature</h2>
    <form action="{{ route('features.update', $feature->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" value="{{ $feature->title }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Current Image</label><br>
            <img src="{{ asset('storage/' . $feature->image_path) }}" class="img-thumbnail mb-2" style="width: 100px;">
            <input type="file" name="image_path" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('features.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
