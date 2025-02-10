

@section('content')
    <h1>All Services</h1>
    <a href="{{ route('services.create') }}">Add New Service</a>

    @foreach($services as $service)
        <p>{{ $service->name }} - {{ $service->description }}</p>
    @endforeach

