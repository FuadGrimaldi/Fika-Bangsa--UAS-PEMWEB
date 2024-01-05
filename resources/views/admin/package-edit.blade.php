@extends('admin.layouts.base')

@section('title', 'Packages')
@section('content')
<div class="row">
  <div class="col-md-12">

    {{-- Alert Here --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Package</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form enctype="multipart/form-data" method="POST" action="{{route('admin.package.update', $package->id)}}">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="name">Nama Package</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="e.g Gold" value="{{ $package->name }}">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $package->price }}" placeholder="e.g 12000">
          </div>
          <div class="form-group">
            <label for="max_days">Max Days</label>
            <input type="number" class="form-control" id="max_days" name="max_days" value="{{ $package->max_days }}" placeholder="e.g 30">
          </div>
          <div class="form-group">
            <label for="max_users">Max Users</label>
            <input type="number" class="form-control" id="max_users" name="max_users" value="{{ $package->max_users }}" placeholder="e.g 6">
          </div>
          <div class="form-group">
            <label>Is Download</label>
            <select class="custom-select" name="is_download">
              <option value="0"{{ $package->is_download == '0' ? "selected": ""}}>No</option>
              <option value="1"{{ $package->is_download == '1' ? "selected": ""}}>Yes</option>
            </select>
          </div>
          <div class="form-group">
            <label>Is 4K</label>
            <select class="custom-select" name="is_4k">
              <option value="0"{{ $package->is_4k == '0' ? "selected": ""}}>No</option>
              <option value="1"{{ $package->is_4k == '1' ? "selected": ""}}>Yes</option>
            </select>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection