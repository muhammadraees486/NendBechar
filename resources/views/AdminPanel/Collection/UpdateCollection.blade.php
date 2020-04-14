@extends('AdminPanel.LAyout.Layout')
@section('title','Update Collection')
@section('Contant')


<div class="container">
    <form action="/Collection/{{$edit->id}}" method="post">
    @csrf
    @method('PUT')
    <h1>Update Collection</h1>




    <div class="form-group">
      <input type="text"
        class="form-control" value="{{$edit->Collection}}" name="Collection" id="" aria-describedby="helpId" placeholder="Collection Name">
    </div>

    <button type="submit" class="btn btn-primary">Save Collection</button>

<br><br><br>
<h3>if you wanna update this Collection click 
    <a href="/Collection">go back</a>
    </h3>
    </form>
</div>





@endsection