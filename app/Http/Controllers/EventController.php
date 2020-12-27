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
}
