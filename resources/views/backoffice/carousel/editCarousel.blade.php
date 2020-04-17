@extends('layouts.app')

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h1 class="box-title">Edit carousel</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('updateCarousel',$carousel->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Title</label>
              <div class="col-sm-10">
                <input name='title' value="{{$carousel->title}}" type="text" class="form-control" id="title" placeholder="Title">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Text</label>
              <div class="col-sm-10">
                <input name='text' value="{{$carousel->text}}" type="text" class="form-control" id="text" placeholder="Text">
              </div>
            </div>
            <div class="form-group">
              <label for="img" class="col-sm-2 control-label">Image</label>
              <div class="col-sm-10">
                <input name='img' type="file" class="form-control" id="img">
              </div>
            </div>
            
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
@endsection
