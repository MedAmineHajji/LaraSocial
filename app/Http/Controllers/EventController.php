<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Event;

use App\Models\Category;

class EventController extends Controller
{

    public function index()
    {
        $events = Event::all();
       // $events = Event::with('category')->get()
        return view('front_office/pages/events/events', compact('events'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('front_office/pages/events/create', compact('categories'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('front_office/pages/events/show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('front_office/pages/events/edit', compact('event'));
    }
    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'category_id' => 'required|exists:categories,id', // Vérifie que la catégorie existe dans la table des catégories

        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'category_id' => $request->input('category_id'),
        ]);




        return redirect()->route('events.index')
            ->with('success', 'event created successfully');
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update 
        $event = Event::findOrFail($id);        
        $event->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect()->route('events.index')
            ->with('success', 'event updated successfully');
    }

    public function destroy($id)
    {
        // Delete the event
        $event = event::findOrFail($id);
        $event->delete();

        return redirect()->route('events.index')
            ->with('success', 'event deleted successfully');
    }
}
