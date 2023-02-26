@extends('layout/auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Posts Table</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
                <th> Id </th>
                <th> Image </th>
                <th> Post name </th>
                <th> Descritption </th>
                <th> Category </th>
                <th> Tags </th>
                <th></th>

            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td> {{ $post->id }} </td>
              <td> <img src={{asset('images/'.$post->image)}} width="120px" height="60px" alt=""> </td>
              <td> {{ $post->name }} </td>
              <td> {{ $post->description }} </td>
              <td>                                             
                @foreach($categories as $category)
                @if($post->category_id == $category->id)
                    {{$category->title}}
                @endif
                @endforeach 
            </td>
            <td>                                             
              @foreach($tags as $tag)
              {{ $tag->title }},
              @endforeach 
          </td>
          <td><button type="button" class="btn btn-inverse-success btn-icon">
            <i class="mdi mdi-table-edit"></i>
          </button>
          <button type="button" class="btn btn-inverse-danger btn-icon">
            <i class="mdi mdi-delete"></i>
          </button>
      </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="justify-content-center m-2">{{ $posts->links()}}</div>

</div>
</div>
</div>
</div>
@endsection