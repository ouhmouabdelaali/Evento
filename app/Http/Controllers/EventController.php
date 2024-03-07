<?php
namespace App\Http\Controllers;

// use App\Http\Requests\StoreEventRequest; 
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Event;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
   public function show()
   {
       $events=Event::all();
      //  $eventAuthuser=Event::where('$user_id',Auth::id());
       $categorys=Category::all();
    
     return view('dashboard',compact('events','categorys'));
     
   }
   public function showeventdetails($id)
   {  
       $event=Event::find($id);
       return view('showeventdetails',compact('event'));
   }

   public function store(Request $request)
   {    
      $event = new Event($request->all());
      $event->save();
      return redirect()->route('dashboard')->with('success', 'Event created successfully!');
   }

   public function update(Request $request,$id)
   {
      $Book= Event::find($id);
      $input=$request->all();
      $Book->update($input);
      return  redirect()->back()->with('success', 'Event update successfully!');
      // return redirect()->route('dashboard')->with('success', 'Event update successfully!');
   }

   public function distroy($id)
   {
      $event=Event::destroy($id);
      return redirect()->route('dashboard')->with('success', 'Event delete successfully!');
   }
   // hadi nta3 soft delete
//    public function destroy($id)
// {
//     $event = Event::findOrFail($id);
//     $event->delete(); // Soft delete the event
    
//     return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
// }
}