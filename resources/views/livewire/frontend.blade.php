<div>
    @foreach ($data as $item)
        <img class="w-32" src="{{asset($item->image)}}" alt="Contest">
        <h2>{{$item->title}}</h2>
        <p>{{$item->description}}</p>
        <a href="/contest/.{{$item->id}}">Go to contest</a>
    @endforeach

    {{$data->links()}}
</div>
