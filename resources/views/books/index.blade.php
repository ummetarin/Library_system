

@section('content')
    <h1>All Books</h1>
    <a href="{{ route('books.create') }}">Add New Book</a>

    @foreach($books as $book)
        <p>{{ $book->title }} by {{ $book->author }}</p>
        <a href="{{ route('books.edit', $book->id) }}">Edit</a>
        <form action="{{ route('books.destroy', $book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

