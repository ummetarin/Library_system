

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $book->title }}" required>
        <input type="text" name="author" value="{{ $book->author }}" required>
        <button type="submit">Update Book</button>
    </form>

