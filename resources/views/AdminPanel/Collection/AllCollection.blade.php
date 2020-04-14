@extends('Adminpanel.Layout.Layout')
@section('title','All Collection')
@section('Contant')
<div align="center">
<br>
<hr>
<h1>All Collection's</h1>
</div>

<hr>
<br>

<div class="container">


    <table class="table">
        <thead>
      
            <tr>
                <th>ID</th>
                <th>Collection</th>
                <th>Action</th>
            </tr>
          
        </thead>
        <tbody>
        @foreach($show_All as $item)     
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->Collection}}</td>
                <td>
                <a href="/Collection/{{$item->id}}/edit">Edit</a>
                <form action="/Collection/{{$item->id}}" method="post">
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