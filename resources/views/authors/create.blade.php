@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tạo tác giả</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('authors.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Tên tác giả</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
    </div>
@endsection