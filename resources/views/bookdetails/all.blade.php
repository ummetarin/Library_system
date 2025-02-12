<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Books</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; padding: 20px; }
        .book-container { border: 1px solid #ccc; padding: 10px; margin: 10px; }
        img { display: block; margin-top: 10px; width: 100px; }
        .buttons { margin-top: 10px; }
        .btn { padding: 8px 12px; text-decoration: none; color: white; border-radius: 5px; margin-right: 5px; }
        .details-btn { background-color: blue; }
        .buy-btn { background-color: green; }
        .borrow-btn { background-color: orange; }
    </style>
</head>
<body>

    <h2>All Books</h2>

    {{-- Debugging: Ensure $books is being passed --}}
    @if(count($books) == 0)
        <p>No books found.</p>
    @else
        @foreach ($books as $book)
            <div class="book-container">
                <p><strong>Title:</strong> {{ $book->title }}</p>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Price:</strong> ${{ $book->price }}</p>
                <p><strong>Category:</strong> {{ $book->category }}</p>
                <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
                <p>
                    <strong>Image:</strong> 
                    <img src="{{ asset($book->image) }}" alt="Book Image">
                </p>

                <!-- Buttons for details, buy, and borrow -->
                <div class="buttons">
                    <a href="{{ route('book.show', $book->id) }}" class="btn details-btn">Details</a>
                    <a href="{{ route('book.buy', $book->id) }}" class="btn buy-btn">Buy</a>
                    <a href="{{ route('book.borrow', $book->id) }}" class="btn borrow-btn">Borrow</a>
                </div>
            </div>
        @endforeach
    @endif

</body>
</html>
