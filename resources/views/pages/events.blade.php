@extends('base')
@section('content')
    <h1>Upcoming Events</h1>
    @foreach($events as $event)
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text"><b>Datum:</b>{{$event->start_date}}</p>
                        <a href="{{route('events.orderTicket', $event->id)}}" class="btn btn-primary">Bestel tickets!</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
