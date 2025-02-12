<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; padding: 20px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        img { display: block; margin: 10px 0; width: 200px; }
        .buttons { margin-top: 15px; }
        .btn { padding: 10px 15px; text-decoration: none; color: white; border-radius: 5px; margin-right: 5px; }
        .buy-btn { background-color: green; }
        .borrow-btn { background-color: orange; }
        .back-btn { background-color: gray; }
    </style>
</head>
<body>

    <div class="container">
        <h2>{{ $book->title }}</h2>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Price:</strong> ${{ $book->price }}</p>
        <p><strong>Category:</strong> {{ $book->category }}</p>
        <p><strong>Quantity Available:</strong> {{ $book->quantity }}</p>

        @if(isset($book->description))
            <p><strong>Description:</strong> {{ $book->description }}</p>
        @endif

        <p>
            <strong>Book Cover:</strong>  
            <img src="{{ asset($book->image) }}" alt="Book Image">
        </p>

        <!-- Buttons for Buy, Borrow, and Back -->
        <div class="buttons">
            <a href="{{ route('bookdetails.buy', $book->id) }}" class="btn buy-btn">Buy</a>
            <a href="{{ route('bookdetails.borrow', $book->id) }}" class="btn borrow-btn">Borrow</a>
            <a href="{{ route('bookdetails.all') }}" class="btn back-btn">Back to List</a>
        </div>
    </div>

</body>
</html>
