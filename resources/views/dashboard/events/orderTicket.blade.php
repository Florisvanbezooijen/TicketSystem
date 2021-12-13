@extends('base')

@section('content')
    <div class="container">
        <h1>Order tickets for {{$event->title}}</h1>
        <form action="{{route('events.storeOrderTicket', $event->id)}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Amount of tickets</label>
                <input type="number" name="amount">
            </div>

            <input type="submit" value="Order Ticket(s)" class="btn btn-primary">

        </form>
    </div>
@endsection
