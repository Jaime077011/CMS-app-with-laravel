@extends('layout/auth')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tags Table</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th> Id </th>
              <th> Tag name </th>
              <th> Tag slug </th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($tags as $tag)
            <tr>
              <td> {{ $tag->id }} </td>
              <td> {{ $tag->title }} </td>
              <td> {{ $tag->slug }} </td>
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
    <div class="justify-content-center m-2">{{ $tags->links()}}</div>

  </div>
</div>
</div>
</div>
</div>
@endsection