

<div class="container mt-5 d-flex ">
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="height: 50px;">
        New category
        </button>
<table class="table "  style="width: 75%; margin: auto;">

  <thead>
    <tr>
      <th scope="col">category</th>
      <th scope="col">Name</th>
      <th scope="col">Event</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categorys as $category)
    <tr>
      <th scope="row"><img src="#" alt="Photo of category"></th>
      <td>{{$category->name}}</td>
      <td>{{$category->events_count}}</td>
      <td class="d-flex align-items-center">


<form action="{{ route('destroy_category', ['category' => $category]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn">
        <span class="material-symbols-outlined" style="color: red;">delete</span>
    </button>
</form>


    
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">
<span class="material-symbols-outlined" style="color: blue;">open_in_new</span>
</button>

      </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>