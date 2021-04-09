<x-app-layout>
    <x-slot name="header">
        <div class="text-white text-center pt-40"
             style="background-image: url('https://i.picsum.photos/id/957/1080/400.jpg?hmac=mIcDK-mz9E0F0euAE_e9-kL8YWG9khjGEtFzG_ElqLc'); height: 50vh;"
        >
            <h2 class="text-3xl font-serif text-center">Contact us</h2>
        </div>
    </x-slot>
    <x-slot name="slot">
        <div class="text-center">
            <h3 class="font-serif italic text-yellow-400">Contact form</h3>
            <h4>GET TO US</h4>
            <h5>Pere Velimirovica 18, 11000 Belgrade, Serbia.</h5>
            <p class="w-1/2 text-center inline-block my-4 font-serif text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta distinctio dolores fuga ipsam magni
                minima optio suscipit. Atque dolor exercitationem magnam neque omnis possimus quos tempore, vel veniam
                voluptate. Aspernatur cupiditate deserunt dolores est nemo nihil nisi porro quod ullam?</p>
        </div>
        <div class="flex justify-between">
            <div class="w-1/3 p-10">
                <h5>Get in touch</h5>
                <h5>CONTACT</h5>

                <form method="post" action="/contact">
                    @csrf
                    <label for="message">Your Message</label>
                    <textarea class="block w-full my-2" name="message" id="message" cols="10" rows="1" placeholder="Message"></textarea>


                    <input class="w-full my-2" type="text" id="name" name="name" placeholder="Name">


                    <input class="w-full mb-2" type="text" id="email" name="email" placeholder="Email">

                    <button type="submit" class=" w-1/3 block bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                        Submit
                    </button>
                </form>
            </div>

            <div class=" p-10">
                <h5>Discover More</h5>
                <h6>RESERVATIONS</h6>
                <p>Pere Velimirovica 18, 11000 Belgrade, Serbia.</p>
                <p>1234-1323-4315-6119-9350</p>
                <p>artContest@artsyacquired.come</p>

                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-instagram"></i>
            </div>
        </div>
    </x-slot>
</x-app-layout>


<style>
    .styling-text {
        font-family: eb garamond;
        font-size: 21px;
        font-style: italic;
        font-weight: 300;
    }
</style>
