<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> 

</head>
<body>
<!-- Nút edit -->
<a href="{{ route('authors.edit', $author) }}" class="btn btn-primary">Edit</a>

<!-- Nút xóa (modal xác nhận) -->
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $author->id }}">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="deleteModal-{{ $author->id }}">
  <div class="modal-dialog">
    <form action="{{ route('authors.destroy', $author) }}" , method="POST">
      @csrf
      @method('DELETE')
      
      <button type="submit">Xóa</button>
    </form>
  </div>
</div>
</body>
</html>