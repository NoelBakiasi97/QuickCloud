@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">History</h3>
        <a class="btn btn-success mx-auto mb-3" href="{{route('addHistory')}}">Add</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Image</th>
                    <th scope="col">Year</th>
                    <th scope="col">Text</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $item)
                    <tr>
                        <td class="text-center"><img class="w-25" src="{{asset('storage/'.$item->img)}}" alt=""></td>
                        <td>{{$item->year}}</td>
                        <td>{{$item->text}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning mr-2" href="{{route('editHistory', $item->id)}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('deleteHistory', $item->id)}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
