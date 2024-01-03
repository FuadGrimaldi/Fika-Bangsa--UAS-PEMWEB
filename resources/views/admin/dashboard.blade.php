@extends('admin.layouts.base')

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>+++</h3>
                    <p>Movie</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-video"></i>
                </div>
                <a href="{{route('admin.movie')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>+++</h3>
                    <p>Package</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-cubes"></i>
                </div>
                <a href="{{route('admin.package')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>+++</h3>
                    <p>Transaction</p>
                </div>
                <div class="icon">
                    <i class="nav-icon fas fa-shopping-cart"></i>
                </div>
                <a href="{{route('admin.transaction')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@endsection