<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> 

</head>
<body>
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form action="{{ route('authors.store') }}" method="POST">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
<label for="bio">Bio:</label>
<textarea name="bio" class="form-control" required></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>