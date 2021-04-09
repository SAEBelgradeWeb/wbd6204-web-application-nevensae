<x-app-layout>
    <x-slot name="header">
        <div class="h-16 p-4"
             style="background-image: url('https://i.picsum.photos/id/832/1400/150.jpg?hmac=qq3oSvLS8-n8cWVTiRs6hRDGaCpG6YvGnz-FmDHu9QU')">
            <h2 class="text-3xl text-white">Title of the Contest</h2>
        </div>
    </x-slot>

    <x-slot name="slot">
        <div style="height: 50vh" class="bg-gray-400">
            <ul>
                <li><h4 class="inline-block text-3xl text-green-500 mb-8 ml-8 mt-8">Rules:</h4></li>
                <li><h5 class="inline-block ml-6 my-2">1.</h5><p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, ducimus?</p></li>
                <li><h5 class="inline-block ml-6 my-2">2.</h5><p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, molestias?</p></li>
                <li><h5 class="inline-block ml-6 my-2">3.</h5><p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, ratione?</p></p></li>
                <li><h5 class="inline-block ml-6 my-2">4.</h5><p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates.</p></li>
                <li><h5 class="inline-block ml-6 my-2">5.</h5><p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, repudiandae.</p></li>
            </ul>
        </div>
        <div class="grid grid-cols-2">
            <form method="POST" action="/submission">
                @csrf
                <h3>Personal Information</h3>
                <input type="text" id="first_name" name="first_name" placeholder="First name" class="w-full my-4 mx-4">
                <input type="text" id="last_name" name="last_name" placeholder="Last name" class=" my-4 mx-4">
                <input type="text" id="country" name="country" placeholder="Country"  class=" mx-4">
                <input type="text" id="address" name="address" placeholder="Address"  class=" mx-4">
                <input type="email" id="email" name="email" placeholder="Email" class=" my-4 mx-4">

                <h3>Art Submission</h3>
                <input type="text" id="title" name="art_title" placeholder="Title of your art" class=" my-4 mx-4">
                <input type="text" id="keywords" name="art_keywords" placeholder="Keywords" class="">
                <textarea name="art_description" id="art_description" cols="30" rows="1" class="w-full mx-4 my-4" placeholder="Description"></textarea>

                <button type="submit" class="w-full mx-4 block bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Submit
                </button>
            </form>
        </div>
    </x-slot>
</x-app-layout>
