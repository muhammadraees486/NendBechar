@extends('AdminPanel.Layout.Layout')
@section('title','All Single')
@section('Contant')
    

<div class="container">
    <h2>All Single Collection</h2>
<hr>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Singer Name</th>
            <th>Album Name</th>
            <th>Track Name</th>
            <th>Track Url</th>
            <th>Album Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($AllSingle as $item)
        <tr>
        <td scope="row">{{$item->id}}</td>
        <td>{{$item->Singer_Name}}</td>
        <td>{{$item->Album_Name}}</td>
        <td>{{$item->Track_Name}}</td>
        <td>{{$item->Track_Url}}</td>
        <td>
        <img src="{{URL::to('/')}}/Images/Single/{{$item->Album_Image}}" height="150px" width="150px" alt="">
        </td>
        <td>
        <a href="/Single/{{$item->id}}/edit">Edit</a>
        <form action="/Single/{{$item->id}}" method="post">
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