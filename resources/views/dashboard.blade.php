<x-app-layout>

<section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Events</h2>
        
                  
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
        @foreach ($events as $event)
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="https://images.unsplash.com/photo-1682687982423-295485af248a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Speaker 1" class="img-fluid">
              <div class="details">
              <h3><a href="{{ route('eventdetails', ['id' => $event->id]) }}">{{ $event->title }}</a></h3>
                <p>{{$event->date}}</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
 @endforeach 
        </div>
      </div>
    </section>

    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
<!--------------------------- starte form NewEvent (modale) --------------------------->
<form action="{{ route('NewEvent') }}" method="POST">
    @csrf <!-- Laravel CSRF protection token -->
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date:</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Location:</label>
        <input type="text" class="form-control" id="location" name="location">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Category:</label>
        <select class="form-select" id="category_id" name="category_id">

            <option selected disabled>Select category</option>
            @foreach($categorys as $category)    
            <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
        </select>
    </div>

    <!-- <div class="mb-3">
        <label for="seats_available" class="form-label">Seats Available:</label>
        <input type="number" class="form-control" id="seats_available" name="seats_available">
    </div> -->

    <button type="submit" class="btn btn-primary">Save</button>
</form>
<!------------------------------ the end form ----------------------------------------->

      <!-- </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
        <button type="button" class="btn btn-primary"> changes</button>
      </div>
    </div> -->

  </div>
</div>

</x-app-layout>
@include('layouts.offcanvas', ['events'=> $events]) 