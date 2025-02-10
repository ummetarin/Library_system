@extends('Home')

@section('content')
    <h1>Add a New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Book Title" required>
        <input type="text" name="author" placeholder="Author Name" required>
        <button type="submit">Add Book</button>
    </form>
@endsection
