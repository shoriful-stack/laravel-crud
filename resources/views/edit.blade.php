<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="fs-2">Edit {{ $ourPost->name }}</h1>
        <a href="/" class="btn btn-secondary">Back To Home</a>
        </div>
    <form class="row g-3" method="POST" action="{{ route("update", $ourPost->id) }}" enctype="multipart/form-data">
        @csrf
  <div class="col-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="inputEmail4" value="{{ $ourPost->name }}">
    @error("name")
    <p>{{ $message }}</p>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Description</label>
    <input type="text" name="description" class="form-control" id="inputAddress" value="{{ $ourPost->description }}">
    @error("description")
    <p>{{ $message }}</p>
    @enderror
</div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="inputAddress" value="{{ $ourPost->image }}">
    @error("image")
    <p>{{ $message }}</p>
    @enderror
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    </div>
</body>
</html>