@extends('layout/auth')
@section('title', 'Create post')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
  <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Create new Page</h4>
          <p class="card-description"> </p>
          <form class="forms-sample" action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Templates</label>
              <select class="form-control form-control-lg" name="template" id="exampleFormControlSelect2">
                <option selected>Choose a Template</option>
                <option value="about">About simple</option>
                <option value="contact">Contact simple</option>
                <option value="home">Home</option>
              </select>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Description</label>
                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleTextarea1">Content</label>
              <textarea class="form-control" id="summernote" name="content" rows="4"></textarea>
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

</script>


@endsection