<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {

        $listEvents = Event::all();

        return view('pages.home', ['listEvents' => $listEvents]);
    }

    public function create() 
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $createEvent = new Event;

        $createEvent->title = $request->title;
        $createEvent->resume = $request->resume;
        $createEvent->uf = $request->uf;
        $createEvent->city = $request->city;
        $createEvent->private = $request->private;
        $createEvent->description = $request->description;

        $createEvent->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
