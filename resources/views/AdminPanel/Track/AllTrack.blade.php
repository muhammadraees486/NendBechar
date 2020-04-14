@extends('AdminPanel.Layout.Layout')
@section('title','All Track')
@section('Contant')

<div class="container">
    <h1>All Track's</h1>


<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Collection Name</th>
            <th>Singer Name</th>
            <th>Album Name</th>
            <th>Track Name</th>
            <th>Track Url</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Track as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td scope="row">{{$item->Collection}}</td>
            <td scope="row">{{$item->Singer_Name}}</td>
            <td scope="row">{{$item->Album_Name}}</td>
            <td scope="row">{{$item->Track_Name}}</td>
            <td scope="row">{{$item->Track_Url}}</td>
            <td>
            <a href="/Track/{{$item->id}}/edit">Edit</a>

            <form action="/Track/{{$item->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
            </form>

            </td>
        </tr>
        @endforeach
         </tbody>
</table>


</div>

@endsection