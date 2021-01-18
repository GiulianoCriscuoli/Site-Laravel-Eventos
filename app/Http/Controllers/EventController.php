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

        // if($request->hasFile('image') && $request->file('image')->isValid()) 
        // {
        //    $requestImage = $request->image;

        //    $ext = $requestImage->extension();

        //    $imageName = md5($requestImage->getClientOriginalName().strtotime("now").".".$ext);

        //    $requestImage->move(public_path('images/upload'), $imageName);

        //    $createEvent->image = $imageName;
        // }

        if($request->hasFile('image') && $request->file('image')->isValid()) 
        {
            $requestImage = $request->image;

            $ext = $requestImage->extension();

            $imageName =  md5($requestImage->getClientOriginalName().strtotime("now").".".$ext);
            
            $requestImage->move(public_path('images/upload'), $imageName);

            $createEvent->image = $imageName;
        }

        $createEvent->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id) {

        $showEvent = Event::findOrFail($id);

        return view('events.show', [ 'event' => $showEvent]);

    }
}
