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
                <th> Page name </th>

                <th> Template name </th>
                <th> Page Link </th>
                <th></th>


            </tr>
          </thead>
          <tbody>
            @foreach($pages as $page)
            <tr>
              <td> {{ $page->id }} </td>

              <td> {{ $page->name }} </td>

              <td> {{ $page->template }} </td>
              <td> <a href="{{ $page->slug }}">http://127.0.0.1:8000/{{ $page->slug }}</a> </td>
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
  <div class="justify-content-center m-2">{{ $pages->links()}}</div>

</div>
</div>
</div>
</div>
@endsection