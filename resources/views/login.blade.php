<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <title>All Books</title>
    <style type="text/tailwindcss">
     .body{
        @apply font-serif;
     }

     .Container{
        max-width: 1240px;
        padding-left: 20px;
        padding-right: 20px;
        margin: 0 auto;
     }
     @screen sm {
        .Container {
            max-width: 390px;
        }
    }

    @screen md {
        .Container {
            max-width: 810px;
        }
    }

    /* h1 */
    .h1{
        font-size: 80px;
        color: white;
        font-family: sans-serif;
        font-weight: bold;
        text-align: center;
    }
    @media (max-width: 810px) {
        .h1 {
            font-size: 60px;
        }
    }
    @media (max-width: 390px) {
        .h1 {
            font-size: 40px;
        }
    }

    /* h2 */
    .h2{
        font-size: 56px;
        font-family: sans-serif;
        font-weight: bold;
        text-align: center;
    }
    @media (max-width: 810px) {
        .h2 {
            font-size: 44px;
        }
    }
    @media (max-width: 390px) {
        .h2 {
            font-size: 36px;
        }
    }
    </style>
</head>
<body class="body">

<!-- Banner Section -->
<section class="bg-teal-800 lg:pt-[220px] md:pt-[160px] pt-[140px] lg:pb-[120px] md:pb-[80px] pb-[60px]">
   <div class="Container">
       <div class="flex flex-col lg:gap-[24px] md:gap-[16px] items-center">
            <h1 class="h1">All Books</h1>
            <p class="text-lg text-center text-gray-200 max-w-[980px]">Explore a vast collection of books. Browse, buy, or borrow your favorite titles.</p>
       </div>
   </div>
</section>

<!-- Book Listing Section -->
<section class="bg-white lg:pt-[120px] md:pt-[80px] pt-[60px] lg:pb-[120px] md:pb-[80px] pb-[60px]">
   <div class="Container">
       <div class="flex flex-col gap-[40px]">
           <div class="flex flex-col lg:gap-[24px] md:gap-[16px] items-center">
               <h1 class="h2 text-teal-800">Available Books</h1>
               <p class="text-lg text-center text-black max-w-[980px]">Find books by category, author, or price. Choose your next read!</p>
           </div>

           {{-- Search by Category --}}
           <form action="{{ route('bookdetails.all') }}" method="GET" class="flex flex-row justify-center items-center gap-4">
               <label for="category" class="text-lg font-medium text-gray-600">Search by Category:</label>
               <select name="category" id="category" class="p-2 border border-gray-800 rounded-lg">
                   <option value="">All Categories</option>
                   @foreach($categories as $category)
                       <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                           {{ ucfirst($category) }}
                       </option>
                   @endforeach
               </select>
               <button type="submit" class="p-2 bg-teal-700 hover:bg-black text-white rounded-lg">Search</button>
           </form>

           {{-- Books List --}}
           @if(count($books) == 0)
               <p class="text-center text-gray-600">No books found.</p>
           @else
               <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                   @foreach ($books as $book)
                       <div class="border border-gray-300 p-6 rounded-lg shadow-lg bg-gray-50">
                           <p class="text-xl font-bold text-teal-700">{{ $book->title }}</p>
                           <p class="text-md text-gray-800"><strong>Author:</strong> {{ $book->author }}</p>
                           <p class="text-md text-gray-800"><strong>Price:</strong> ${{ $book->price }}</p>
                           <p class="text-md text-gray-800"><strong>Category:</strong> {{ $book->category }}</p>
                           <p class="text-md text-gray-800"><strong>Quantity:</strong> {{ $book->quantity }}</p>
                           <div class="mt-4 flex justify-center">
                               <img src="{{ asset($book->image) }}" alt="Book Image" class="w-40 h-auto rounded-lg">
                           </div>
                           <div class="mt-4 flex justify-between">
                               <a href="{{ route('bookdetails.show', $book->id) }}" class="bg-blue-600 hover:bg-blue-800 text-white px-4 py-2 rounded-lg">Details</a>
                               <a href="{{ route('bookdetails.buy', $book->id) }}" class="bg-green-600 hover:bg-green-800 text-white px-4 py-2 rounded-lg">Buy</a>
                               <a href="{{ route('bookdetails.borrow', $book->id) }}" class="bg-orange-600 hover:bg-orange-800 text-white px-4 py-2 rounded-lg">Borrow</a>
                           </div>
                       </div>
                   @endforeach
               </div>
           @endif
       </div>
   </div>
</section>

</body>
</html>
