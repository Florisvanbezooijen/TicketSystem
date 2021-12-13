@extends('base')
@section('content')
    <div class="container">
        <div class="list-group">
            <table class="table">
                <thead>
                <tr>
                    <th class="">Titel</th>
                    <th class="">Startdatum</th>
                    <th class="">Prijs</th>
                    <th class="">Adres</th>
                    <th class="">Locatie</th>
                </tr>
                </thead>

                @foreach($events as $event)
                    <tr>
                        <td class=""><a href="events/{{$event->id}}">{{$event->title}}</a></td>
                        <td class="">{{$event->start_date}}</td>
                        <td class="">{{$event->ticket_price}}</td>
                        <td class="">{{$event->address}}</td>
                        <td class="">{{$event->city}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

