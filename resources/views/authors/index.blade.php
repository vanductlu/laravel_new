@extends('layouts.app')

@section('content')
    <h1>Authors</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('authors.show', $author) }}" class="btn btn-primary">Show<i class="fa fa-eye"></i></a>
                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-warning">EDIT<i class="fa fa-edit"></i></a>
                        <form action="{{ route('authors.destroy', $author) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this author?')">Delete<i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
