<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
      //   dd($events);
        $categorys = Category::all();
      //   dd($categorys);
        return view('Organisatuer.organisteurhome', compact('events','categorys'));
    }

   //  public function create()
   //  {
   //      $categories = Category::all();
   //      return view('events.create', compact('categories'));
   //  }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048' // max 2MB
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images');
            $event->image = $imagePath;
        }

        $event->save();

        return redirect()->route('organisteurhome')->with('success', 'Event created successfully!');
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048' // max 2MB
        ]);

        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->location = $request->location;
        $event->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event_images');
            $event->image = $imagePath;
        }

        $event->save();

        return redirect()->route('organisteurhome')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        if ($event->image) {
            // Delete event image if it exists
            Storage::delete($event->image);
        }
        
        $event->delete();

        return redirect()->route('organisteurhome')->with('success', 'Event deleted successfully!');
    }
}
