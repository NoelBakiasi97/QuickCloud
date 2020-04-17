@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Carousel</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th class="text-center" scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carousel as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->text}}</td>
                        <td class="text-center"><img class="w-25" src="{{asset('storage/'.$item->img)}}" alt=""></td>
                        <td><a class="btn btn-warning" href="{{route('editCarousel', $item->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
