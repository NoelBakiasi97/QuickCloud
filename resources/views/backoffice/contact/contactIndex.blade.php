@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Contact</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Url</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Number</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                    <tr>
                        <td>{{$item->email}}</td>
                        <td>{{$item->url}}</td>
                        <td>{{$item->adress}}</td>
                        <td>{{$item->number}}</td>
                        <td><a class="btn btn-warning" href="{{route('editContact', $item->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
