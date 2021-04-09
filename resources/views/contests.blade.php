<x-app-layout>
    <x-slot name="header">
        <div class="h-16 p-4"
             style="background-image: url('https://i.picsum.photos/id/832/1400/150.jpg?hmac=qq3oSvLS8-n8cWVTiRs6hRDGaCpG6YvGnz-FmDHu9QU')">
            <h2 class="text-3xl text-white">Title of the Contest</h2>
        </div>
    </x-slot>

    <x-slot name="slot">
        <h2>Example name of the Contest</h2>

        <div class="flex">
            <img src="https://i.picsum.photos/id/37/700/500.jpg?hmac=ymoCe-srfnxUi3I2Gm-XCbNuink3er-dVeflTWCoXq4"
                 alt="">
            <div class="mx-12">
                <h4>DESCRIPTION</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus iste laudantium nihil nobis
                    numquam optio porro quae reprehenderit veritatis voluptatum!</p>

                <h4 class="mt-8">FEATURED PAINTING</h4>
                <img class="mt-5" src="https://i.picsum.photos/id/0/300/200.jpg?hmac=qPTvURjzRq35DI4OD_cOli0W3KL2YowI7_hiVIvXulQ" alt="">

                <h4 class="mt-8">CATEGORIES</h4>
                <p class="mt-5">Acrylic</p>
                <p>Environment</p>
                <p>Brushes</p>
            </div>
        </div>

        <a href="contests/1" class="w-full block bg-black text-white text-center p-6 m-4">ENTER CONTEST</a>
    </x-slot>
</x-app-layout>
