<x-app-layout>
    <x-slot name="header">
        <div class="text-white text-center p-40"
             style="background-image: url('https://i.picsum.photos/id/957/1080/400.jpg?hmac=mIcDK-mz9E0F0euAE_e9-kL8YWG9khjGEtFzG_ElqLc'); height: 50vh;"
        >
            <h2 class="text-3xl font-serif align-top">About us</h2>
        </div>
    </x-slot>
    <x-slot name="slot">
        <div class="text-center">
            <h3 class="font-serif italic text-yellow-400">About Us</h3>
            <h4>ARTIST UNIOON</h4>
            <p class="w-1/2 text-center inline-block my-4 font-serif text-gray-600 text-sm">Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Dicta distinctio dolores fuga ipsam magni
                minima optio suscipit. Atque dolor exercitationem magnam neque omnis possimus quos tempore?</p>
        </div>

        <div class="flex justify-between">
            <div class="w-1/2">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolorem dolores ducimus harum
                    molestias possimus, repellat reprehenderit repudiandae sit suscipit! Dignissimos quidem sequi tenetur
                    voluptates. Accusamus, asperiores commodi distinctio, doloremque doloribus error esse expedita impedit
                    labore laborum magni nostrum odit qui ratione recusandae sunt, temporibus vero? Exercitationem nisi sunt
                    veniam!</p>
            </div>
            <div>
                <h4>OPENED CONTESTS</h4>
                <p>WebColors 24.5.2021</p>
                <p>TrueStory 26.4.2021</p>
            </div>
            <div>
                <h4>UPCOMING CONTESTS</h4>
                <p>NatureGuidance 25.8.2021</p>
                <p>SteadyGlory 11.10.2021</p>
            </div>
        </div>
    </x-slot>
</x-app-layout>

