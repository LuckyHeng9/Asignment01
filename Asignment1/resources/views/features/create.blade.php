<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Feature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Add Feature</h2>
    <form action="{{ route('features.store') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image_path" class="form-control" required>
        </div>
        <button class="btn btn-success">Create</button>
        <a href="{{ route('features.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
