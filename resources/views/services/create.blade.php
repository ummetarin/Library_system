

@section('content')
    <h1>Add a New Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Service Name" required>
        <textarea name="description" placeholder="Service Description" required></textarea>
        <button type="submit">Add Service</button>
    </form>

