@extends('layouts.app')

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h1 class="box-title">Add history</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('saveHistory')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="image" class="col-sm-2 control-label">Image</label>
              @error('img')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='img' type="file" class="form-control" id="img">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Year</label>
              @error('year')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='year' type="text" class="form-control" id="year" placeholder="Year">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Text</label>
              @error('text')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='text' type="text" class="form-control" id="text" placeholder="text">
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
