<div class="modal fade" id="example{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
      </div>
      <div class="modal-body">
        
<!--------------------------- starte form NewEvent (modale) --------------------------->
<form action="{{ route('UpdateEvent',$event->id) }}" method="POST">
    @csrf <!-- Laravel CSRF protection token -->
    @method('PATCH')
    <div class="mb-3">
        <label for="title" class="form-label">Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}"> 
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description:</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date:</label>
        <input type="date" class="form-control" id="date" name="date" value="{{$event->data}}">
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Location:</label>
        <input type="text" class="form-control" id="location" name="location"value="{{$event->location}}">
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

    <button type="submit" class="btn btn-primary">Update</button>
</form>