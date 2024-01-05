@extends('admin.layouts.base')

@section('title', 'Package')

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Package</h3>
        </div>
        
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('admin.package.create')}}" class="btn btn-warning">Create Package</a>
            </div>
          </div>

          @if(session()->has('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
          @endif
          <div class="row">
            <div class="col-md-12">
              <table id="package" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Max days</th>
                    <th>Max users</th>
                    <th>Download</th>
                    <th>4K</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($packages as $package)
                    <tr>
                      <td>{{$package->id}}</td>
                      <td>{{$package->name}}</td>
                      <td>{{$package->price}}</td>
                      <td>{{$package->max_days}}</td>
                      <td>{{$package->max_users}}</td>
                      <td>{{$package->is_download}}</td>
                      <td>{{$package->is_4k}}</td>
                      <td>
                        <a href="{{route('admin.package.edit',$package->id)}}" class="btn btn-secondary">
                          <i class="far fa-edit"></i>
                        </a>
                        <form method="post" action="{{ route('admin.package.destroy', $package->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                            </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('js')
  <script>
    $('#package').DataTable();
  </script>
  @endsection