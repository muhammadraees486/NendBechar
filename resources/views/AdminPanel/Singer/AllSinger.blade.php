@extends('AdminPanel.Layout.LAyout')
@section('title','All Singer')
@section('Contant')


<div class="container">
    <h1>All Singer's</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Singer Name</th>
            <th>Collection</th>
            <th>Singer Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($All_Singer as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->Singer_Name}}</td>
            <td>{{$item->Collection}}</td>
            <td>
            <img src="{{URL::to('/')}}/Images/SingerImage/{{$item->Singer_Image}}" width="100px;" height="120px;" alt="Singer Image">
            </td>
            <td>
            <a href="/Singer/{{$item->id}}/edit">Edit</a>
            <form action="/Singer/{{$item->id}}" method="post">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-primary">DELETE</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>


@endsection