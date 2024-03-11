@foreach ($events as $event)


<div class="modal fade" id="updateEventModal{{$event->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Event</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="col-form-label">Date:</label>
                        <input type="datetime-local" class="form-control" id="date" name="date" value="{{ date('Y-m-d\TH:i', strtotime($event->date)) }}">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="col-form-label">Category:</label>
                        <select class="form-control" id="category" name="category_id">
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $event->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
