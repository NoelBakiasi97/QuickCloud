@extends('layouts.app')

@section('content')
<div class="box box-info">
    <div class="box-header with-border">
        <h1 class="box-title">Add testimonial</h1>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" action="{{route('saveTestimonials')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="box-body">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                @error('title')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
                <div class="col-sm-10">
                    <input name='title' type="text" class="form-control" id="title" placeholder="Title">
                </div>
            </div>
            <div class="form-group">
                <label for="img" class="col-sm-2 control-label">Comment</label>
                @error('comment')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
                <div class="col-sm-10">
                    <input name='comment' type="text" class="form-control" id="title" placeholder="Comment">
                </div>
            </div>
            <div class="form-group">
                <label for="img" class="col-sm-2 control-label">Image</label>
                @error('img')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
                <div class="col-sm-10">
                    <input name='img' type="file" class="form-control" id="img">
                </div>
            </div>
            <div class="form-group">
                <label for="text" class="col-sm-2 control-label">Name</label>
                @error('name')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
                <div class="col-sm-10">
                    <input name='name' type="text" class="form-control" id="name" placeholder="Name">
                </div>
            </div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
@endsection
