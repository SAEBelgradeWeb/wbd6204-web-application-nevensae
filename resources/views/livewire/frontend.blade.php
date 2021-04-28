<div>
{{--    Main navigation - Extract to a component--}}
    <div style="height: 35vh; background-color: #4a5568; opacity: 0.2;">
{{--        Navigation--}}
        <div>
            <nav>
                <ul>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="{{url('/')}}">Home</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="{{url('#')}}">About</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="{{url('#')}}">Contact</a></li>
                    <li class="inline-block p-4"><a class="text-white font-serif" href="{{url('#')}}">Contests</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <h2 class="text-6xl text-white text-center mt-12 font-serif">Home</h2>
        </div>
    </div>

{{--    Main Content--}}
    <main class="bg-gray-200">
        <section>
            <div class="lg:flex lg:justify-between">
                    @foreach ($data as $item)
                        <div class="lg:w-1/3 lg:mx-12 md:mx-auto md:w-1/2 m-16">
                            <img class="" src="{{asset($item->image)}}" alt="Contest">
                            <h2 class="text-center font-serif text-2xl">{{$item->title}}</h2>
                            <p class="text-center font-serif">{{$item->description}}</p>
                            <button class="text-center bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full mt-4">
                                <a class="text-center font-serif" href="{{url('/contest/'.$item->id)}}">Go to contest</a>
                            </button>
                        </div>
                    @endforeach
            </div>
            <div class="mx-16">
            {{$data->links()}}
            </div>
        </section>
    </main>
</div>




