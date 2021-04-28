<div>

        {{--        Navigation--}}
        <div>
            <nav>
                <ul>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('/')}}">Home</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('#')}}">About</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('#')}}">Contact</a></li>
                    <li class="inline-block p-4"><a class="uppercase text-black font-serif" href="{{url('#')}}">Contests</a></li>
                </ul>
            </nav>
        </div>
        <div class="mt-6" style="height: 20vh; background-image: url('https://i.picsum.photos/id/923/1920/300.jpg?hmac=RyvPEq86PCfqpRUD0bhjgIK13GLeC_apIm6qR4m2dNM'); opacity: 0.8;">
            <div>
                <h2 class="text-6xl text-white inline-block font-serif pt-10 pl-20 uppercase">Contest - {{$title}}</h2>
            </div>
        </div>

        <section>
            <main>
                <div class="flex m-20">
                    <div class="w-3/5">
                        <img src="{{url(asset($image))}}" alt="contest_image">
                    </div>
                    <div class="w-2/5 ml-20">
                        <h2 class="uppercase text-2xl font-serif mb-5">Artify</h2>
                        <h3 class="uppercase text-xl font-serif">{{$title}}</h3>
                        <p class="font-serif ml-10">{{$description}}</p>
                        <h3 class="uppercase text-2xl font-serif my-5">Featured Image</h3>
                        <img class="w-3/5 ml-10" src="{{url(asset($featured_image))}}" alt="featured_image">
                        <div>
                            <h3 class="uppercase font-serif text-2xl my-5">Categories</h3>
                            <p  class="font-serif italic ml-10">Blue</p>
                            <p  class="font-serif italic ml-10">Wet painting</p>
                            <p class="font-serif italic ml-10" >Modern</p>
                        </div>
                    </div>
                </div>
                <div class="xl:container">
                    <button class="bg-gray-800 hover:bg-gray-400 text-white font-bold py-4 px-4 rounded-l w-4/5 mb-20 ml-20" wire:click="createShowModal">
                        You may enter the competition with only one entry
                    </button>
                </div>
            </main>
        </section>

{{--    Modal for the submissions--}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Submission Entry') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="name" />
                @error('name') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" wire:model.debounce.800ms="email" />
                @error('email') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="country" />
                @error('country') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="submission_image" value="{{ __('Submission Image') }}" />
                <x-jet-input id="submission_image" class="block mt-1 w-full" type="file" wire:model.debounce.800ms="submission_image" />
                @error('submission_image') <span class="error">{{$message}}</span> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
