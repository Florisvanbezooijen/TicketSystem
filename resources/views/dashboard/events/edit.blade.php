@extends('base')
@section('content')
    <div class="container border mt-4">
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="w-full"action="{{route('events.update', $event->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="Title">Titel</label>
                    <input name="title" value="{{$event->title}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Titel" type="text">
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="Beschrijving">Beschrijving</label>
                    <textarea name="description" value="{{$event->description}}" class="block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Beschrijving"  name="beschrijving" id="beschrijving" cols="30" rows="10"></textarea>
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Adres">Adres</label>
                    <input name="address" value="{{$event->address}}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Adres" type="text">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Postcode">Postcode</label>
                    <input name="zip" value="{{$event->zip}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Postcode" type="text">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Plaats">Plaats</label>
                    <input name="city" value="{{$event->city}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Plaats" type="text">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Ticketprijs">Ticketprijs</label>
                    <input name="ticket_price" value="{{$event->ticket_price}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Ticketprijs" type="text">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Startdatum">Startdatum</label>
                    <input name="start_date" value="{{$event->start_date}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" type="date">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Einddatum">Einddatum</label>
                    <input name="end_date" value="{{$event->end_date}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" type="date">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <label for="Servicekosten">Servicekosten</label>
                    <input name="service_cost" value="{{$event->service_cost}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-1 px-1 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Servicekosten" type="text">
                </div>
                <div class="w-full px-3 -mb-6 md:mb-0">
                    <input type="submit" class="p-2 px-3 bg-blue-600 rounded text-white focus:bg-blue-400" value="Updaten">
                </div>
            </div>
        </form>
    </div>

@endsection
