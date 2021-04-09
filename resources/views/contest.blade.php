<x-app-layout>
    <x-slot name="header"></x-slot>

    <x-slot name="slot">
        <p>Hello</p>
        <h1>{{$contest->title}}</h1>
    </x-slot>
</x-app-layout>
