<x-app-layout>
    <x-slot name="header">
        <p class="mt-5">This will be the header</p>
    </x-slot>

    <x-slot name="slot" >
        <div>
            <h1>Current Competitons</h1>
            <div class="flex justify-between">
                <div class="m-8 w-1/3 flex" style="background-image: url('https://i.picsum.photos/id/396/400/300.jpg?hmac=WFbUNRTExa3mlIZokcNj6viH3HAHED749xKYJFDGk40'); background-position: center; background-repeat: no-repeat;">
                    <h4 class="align-middle mt-6 text-white inline-block">Competiton Name</h4>
                    <button class="align-middle text-white">Competition description</button>
                </div>
                <div class="m-8">
                    <img src="https://i.picsum.photos/id/396/400/300.jpg?hmac=WFbUNRTExa3mlIZokcNj6viH3HAHED749xKYJFDGk40" alt="">
                    <h4>Competiton Name</h4>
                    <p>Competition description. Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="m-8">
                    <img src="https://i.picsum.photos/id/396/400/300.jpg?hmac=WFbUNRTExa3mlIZokcNj6viH3HAHED749xKYJFDGk40" alt="">
                    <h4>Competiton Name</h4>
                    <p>Competition description. Lorem ipsum dolor sit amet.</p>
                </div>
            </div>

            <div>
                <h2>Upcoming Competitions</h2>
                <div>
                    <div class="flex justify-between">
                        <h4>23 April: friday</h4>
                        <img class="rounded-full" src="https://i.picsum.photos/id/785/150/150.jpg?hmac=uFiAy69Yjnoan9oSrlFzUvp_SSjEq7wCc1Kg8HaYp4M" alt="">
                        <h5>Competition name. Lorem ipsum dolor sit amet.</h5>
                        <p>Full description of the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sed.</p>
                        <a href="#event-id">Find Out More.</a>
                    </div>
                    <div class="flex justify-between">
                        <h4>23 April: friday</h4>
                        <img class="rounded-full" src="https://i.picsum.photos/id/785/150/150.jpg?hmac=uFiAy69Yjnoan9oSrlFzUvp_SSjEq7wCc1Kg8HaYp4M" alt="">
                        <h5>Competition name. Lorem ipsum dolor sit amet.</h5>
                        <p>Full description of the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sed.</p>
                        <a href="#event-id">Find Out More.</a>
                    </div>
                    <div class="flex justify-between">
                        <h4>23 April: friday</h4>
                        <img class="rounded-full" src="https://i.picsum.photos/id/785/150/150.jpg?hmac=uFiAy69Yjnoan9oSrlFzUvp_SSjEq7wCc1Kg8HaYp4M" alt="">
                        <h5>Competition name. Lorem ipsum dolor sit amet.</h5>
                        <p>Full description of the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sed.</p>
                        <a href="#event-id">Find Out More.</a>
                    </div>
                    <div class="flex justify-between">
                        <h4>23 April: friday</h4>
                        <img class="rounded-full" src="https://i.picsum.photos/id/785/150/150.jpg?hmac=uFiAy69Yjnoan9oSrlFzUvp_SSjEq7wCc1Kg8HaYp4M" alt="">
                        <h5>Competition name. Lorem ipsum dolor sit amet.</h5>
                        <p>Full description of the event. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, sed.</p>
                        <a href="#event-id">Find Out More.</a>
                    </div>

                </div>
                <div></div>
                <div></div>
            </div>

        </div>
    </x-slot>
</x-app-layout>

