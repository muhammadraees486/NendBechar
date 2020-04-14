@extends('AdminPanel.Layout.Layout')
@Section('title','All Albums')
@section('Contant')

<div class="container">
    <h1>All Album's</h1>

<br>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Album Name</th>
            <th>Release Date</th>
            <th>Total Track</th>
            <th>Singer Name</th>
            <th>Collection</th>
            <th>Album Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Album as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->Album_Name }}</td>
            <td>{{$item->Release_Date}}</td>
            <td>{{$item->Total_Track}}</td>
            <td>{{$item->Singer_Name}}</td>
            <td>{{$item->Collection}}</td>
            <td>
            <img src="{{URL::to('/')}}/Images/AlbumImage/{{$item->Album_Image}}" height="120px" width="100%" alt="">
            </td>
            <td>
            <a href="/Album/{{$item->id}}/edit">Edit</a>
            <form action="/Album/{{$item->id}}" method="post">
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
