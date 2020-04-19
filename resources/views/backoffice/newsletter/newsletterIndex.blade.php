@extends('layouts.app')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Subscribers</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsletter as $item)
                    <tr>
                        <td>{{$item->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
