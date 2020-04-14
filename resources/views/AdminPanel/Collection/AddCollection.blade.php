@extends('AdminPanel.Layout.Layout')
@section('title','Add Collection')
@section('Contant')

<div class="container">
    <form action="/Collection" method="post">
    @csrf
    
    <h1>Add Collection</h1>

    <div class="form-group">
      <input type="text"
        class="form-control" name="Collection" id="" aria-describedby="helpId" placeholder="Collection Name">
    </div>

    <button type="submit" class="btn btn-primary">Save Collection</button>

<br><br><br>
<h3>if you wanna see All Collection 
    <a href="/Collection">Click here</a>
    </h3>
    </form>
</div>





@endsection