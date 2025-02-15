<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
        <h1>Home</h1>
        <a href="/create" class="btn-primary btn">Add New</a>
        </div>

        @if (session("success"))
        <p>{{ session("success") }}</p>
    @endif

    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $posts as $post)
    <tr>
      <th scope="row">{{ $post->id}}</th>
      <td>{{ $post->name }}</td>
      <td>{{ $post->description }}</td>
      <td class="w-25 h-25"><img class="w-25 h-25" src="image/{{ $post->image }}" alt=""></td>
      <td class="d-flex justify-content-center py-24">
        <a href="{{ route("edit", $post->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route("delete", $post->id) }}" class="btn btn-warning">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</body>
</html>