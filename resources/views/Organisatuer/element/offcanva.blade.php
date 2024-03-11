<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
  Toggle static offcanvas
</button>

<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">

    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        My Events
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
          
<!-- ::: -->
    <ul class="list-group list-group-flush">
    @foreach ($events as $event)
    <li class="list-group-item d-flex justify-content-between align-items-center">
    @if ($event->image_path)
    <img src="{{$event->image}}" alt="Image 1" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;">
    @else
    <img src="{{ asset('placeholder.jpg') }}" alt="Image 1" class="img-thumbnail rounded-circle" style="width: 50px; height: 50px;">
    @endif      
    <h5>{{ $event->title }}</h5>
    <div class="d-flex gap-1">
    <form action="{{ route('events.delete', ['event' => $event]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">
        <span class="material-symbols-outlined" style="color: red;">delete</span>
    </button>
    </form>
    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#updateEventModal{{$event->id}}">
    <span class="material-symbols-outlined" style="color: blue;">open_in_new</span>
   </button>
   </div>
   </li>
   @endforeach
   <div>
   <button type="button" class="btn btn-success w-100 p-3" data-bs-toggle="modal" data-bs-target="#addEventModal">
    Add Event
   </button> 
</div>
   </ul>

<!-- ::::: -->
        
      </div>
    </div>
  </div>


  <!-- <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->
 
</div>


     
    </div>
  </div>
</div>