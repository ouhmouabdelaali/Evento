<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">The Events</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>


     <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary w-100 p-3 d-flex align-items-baseline" data-bs-toggle="modal" data-bs-target="#exampleModal" >
         New Event
    </button>

    <div>

    
    </div>
    @foreach($events as $event)
      <div class="d-flex">
        <img src="" alt="">
         {{$event->title}}
         <form action="{{route('DeleteEvent',$event->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >delete</button>
                  </form>
                  <form action="" method="post">  
                  <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#example{{$event->id}}" >
                        Update
                    </button>
                  </form>
             

      </div>

    @endforeach

    </div>
  </div>
</div>
@include('layouts.updateventmodal',['events'=> $events])
