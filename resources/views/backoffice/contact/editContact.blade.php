@extends('layouts.app')

@section('content')
<div class="box box-info">
        <div class="box-header with-border">
          <h1 class="box-title">Edit contact</h1>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('updateContact',$contact->id)}}" method="POST">
        @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              @error('email')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='email' value="{{$contact->email}}" type="text" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Website URL</label>
              @error('url')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='url' value="{{$contact->url}}" type="text" class="form-control" id="url" placeholder="Url">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Adress</label>
              @error('adress')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='adress' value="{{$contact->adress}}" type="text" class="form-control" id="adress" placeholder="Adress">
              </div>
            </div>
            <div class="form-group">
              <label for="text" class="col-sm-2 control-label">Number</label>
              @error('number')
                <p class="alert alert-danger w-50">{{$message}}</p>
              @enderror
              <div class="col-sm-10">
                <input name='number' value="{{$contact->number}}" type="text" class="form-control" id="number" placeholder="Number">
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
