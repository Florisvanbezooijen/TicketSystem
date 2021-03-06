<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderTicket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;


class TicketController extends Controller
{
    public function order( $eventId ){
        $event = Event::findOrFail($eventId);
        return view("dashboard.events.orderTicket")->with('event', $event);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($eventId, Request $request)
    {
        $event = Event::findOrFail($eventId);

        $request->validate([
            'amount' => ['numeric']
        ]);

        $order = new Order();
        $order ->customer_id = Auth::id();
        $order->event_id=$event->id;
        $order->order_number = Date('Ymd') . (Order::all()->count()+1);
        $order->status = 'paid';
        $order->order_date = Date('Y-m-d h:m:s');
        $order->save();

        $amountOfTickets = $request->amount;
        for ($i = 0; $i < $amountOfTickets; $i++) {
            $ticket = new Ticket();
            $ticket->status = 0;
            $ticket->price_per_ticket = $event->ticket_price;
            $ticket->save();

            $orderTicket = new OrderTicket();
            $orderTicket->order_id = $order->id;
            $orderTicket->ticket_id = $ticket->id;
            $orderTicket->save();

        }
        return redirect()->route("events")->with('success', 'Tickets besteld!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
