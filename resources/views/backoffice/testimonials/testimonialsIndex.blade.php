@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Testimonials</h3>
        <a class="btn btn-success mb-3" href="{{route('addTestimonials')}}">Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->comment}}</td>
                        <td><img class="w-25" src="{{asset('storage/'.$item->img)}}" alt=""></td>
                        <td>{{$item->name}}</td>
                        <td><a class="btn btn-danger" href="{{route('deleteTestimonials', $item->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
