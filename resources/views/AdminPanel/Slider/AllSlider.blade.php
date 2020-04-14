@extends('AdminPanel.Layout.Layout')
@section('title','All Slider')
@section('Contant')


<div class="container">
    
    <h2>All Slider here</h2>

    <br>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Slider Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($AllSlider as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->Title}}</td>
            <td>{{$item->Description}}</td>
            <td>
            <img src="{{URL::to('/')}}/Images/Slider/{{$item->Slider_Image}}" width="100&" height="150px" alt="">
            </td>

            <td>
            <a href="/Slider/{{$item->id}}/edit">Edit</a>

            <form action="/Slider/{{$item->id}}" method="post">
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