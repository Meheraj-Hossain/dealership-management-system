@extends('layout.admin.master')
@section('breadcrumb')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('shop_registration.index')}}">Shop Registration</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="offset-3 col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('shop_registration.update',$shop->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="card-body">
                        @include('admin..shop_registration._form')

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
@endsection



