<h1>Itemsss</h1>


<ul>
    @foreach ($item as $i)
    <li>{{$i['id']}} - {{$i['name']}} </li>
    @endforeach
</ul>