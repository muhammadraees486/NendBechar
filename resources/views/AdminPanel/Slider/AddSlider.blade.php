@extends('AdminPanel.Layout.Layout')
@section('title','Add Slider')
@section('Contant')


<div class="container">
    <h1>Add Slider </h1>

    <br>

<form action="/Slider" method="post" enctype="multipart/form-data">

@csrf

<div class="form-group">
  <input type="text"
    class="form-control" name="Title" id="" aria-describedby="helpId" placeholder="Slider Title">
</div>

<div class="form-group">
  <input type="text"
    class="form-control" name="Description" id="" aria-describedby="helpId" placeholder="Slider Title">
</div>

<div class="form-group">
  <input type="file"
     name="Slider_Image" >
</div>

<button type="submit" class="btn btn-primary">Save Slider</button>

</form>

<h2>if upu wanna See All Slider <a href="/Slider">Click here</a> </h2>

</div>



@endsection