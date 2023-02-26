@extends('layout/auth')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create new Tag</h4>
          <p class="card-description"> </p>
          <form class="forms-sample" action="{{ route('tags.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Title</label>
              <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title">
            </div>
            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>

@endsection