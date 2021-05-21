@extends('layouts.app')
@section('content')
    <div>
        <div>
            <h1>Cars</h1>
        </div>
    </div>

    <a href="/cars/create">
        Create a new car
    </a>

    <div>
        @foreach($cars as $car)
            <div>
                <div>
                    <a class="border-b-2 pb-2 border-dotted italic text-green-500" href="/cars/{{$car->id}}/edit">Edit</a>
                    <form action="/cars/{{$car->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete
                        </button>
                    </form>
                </div>
            <span>
                Founded: {{$car->founded}}
            </span>
                <h2>
                    {{$car->name}}
                </h2>
                <p>
                    {{$car->description}}
                </p>

                <hr>
            </div>
        @endforeach
    </div>

@endsection
