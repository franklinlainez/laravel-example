@extends('layouts.app')
@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create car
            </h1>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/cars" method="POST">
                @csrf
                <div class="block">
                    <input type="text"
                           class="block shadow-5xl mb-10 p-2 w-80 italic"
                           placeholder="Founded..."
                           name="founded"
                    >
                    <input type="text"
                           class="block shadow-5xl mb-10 p-2 w-80 italic"
                           placeholder="Brand name..."
                           name="name"
                    >
                    <input type="text"
                           class="block shadow-5xl mb-10 p-2 w-80 italic"
                           placeholder="Description..."
                           name="description"
                    >
                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
