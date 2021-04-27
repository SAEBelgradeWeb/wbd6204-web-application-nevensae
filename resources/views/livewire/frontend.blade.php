<div>
{{--    Main navigation - Extract to a component--}}
    <div style="height: 40vh; background-color: #4a5568; opacity: 0.2;">
{{--        Navigation--}}
        <div>
            <nav>
                <ul>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="#">Home</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="#">About</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="#">Contact</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="#">Contests</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <h2 class="text-6xl text-white text-center mt-12 font-serif">Home</h2>
        </div>
    </div>

{{--    Main Content--}}
    <div class="grid grid-cols-3">
            @foreach ($data as $item)
                <div>
                    <img class="w-32" src="{{asset($item->image)}}" alt="Contest">
                    <h2>{{$item->title}}</h2>
                    <p>{{$item->description}}</p>
                    <a href="/contest/.{{$item->id}}">Go to contest</a>
                </div>
            @endforeach
    </div>
            {{$data->links()}}
</div>





