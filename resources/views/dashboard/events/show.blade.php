@extends('base')
@section('content')

    <div class="container border-bottom-2">
        <h1 class="text-5xl font-semibold">Dashboard</h1>
        <h2 class="text-3xl font-semibold my-3">Event detailpagina</h2>
        <hr class="my-3">

        <div class="">
            <h3 class="text-2xl font-medium">{{$event->title}}</h3>
            <p class="mb-2"><span class="font-bold">Start: </span>{{$event->start_date}}</p>
            <p class="mb-2"><span class="font-bold">Adres: </span>{{$event->address}}</p>
            <p class="mb-2"><span class="font-bold">Postcode: </span>{{$event->zip}}</p>
            <p class="mb-2"><span class="font-bold">Locatie: </span>{{$event->city}}</p>
            <p class="mb-2"><span class="font-bold">Ticketprijs: </span>{{$event->ticket_price}}</p>

        </div>

        <div class="flex flex-1 space-x-0.5">
            <a href="{{route('events.edit', $event->id)}}" class="p-2 px-3 bg-blue-300 rounded">Aanpassen</a>
            <form action="{{route('events.destroy', $event->id)}}" method="post" >
                @csrf
                @method('DELETE')
                <input type="submit" class="p-2 px-3 bg-red-600 text-white rounded" value="Verwijderen">
            </form>
        </div>

    </div>



@endsection
