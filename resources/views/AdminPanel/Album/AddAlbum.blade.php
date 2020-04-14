@extends('AdminPanel.Layout.Layout')
@section('title','Add Album')
@section('Contant')


<div class="container">
    
<h1>Add Album Here</h1>
<br>

<form action="/Album" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
  <label for="">Select Collection</label>
  <select class="form-control" name="Collection_Id" id="">
  @foreach($Collection as $item)
    <option value="{{$item->id}}">{{$item->Collection}}</option>
    @endforeach
  </select>
</div>


<div class="form-group">
  <label for="">Select Collection</label>
  <select class="form-control" name="Singer_Id" id="">
  @foreach($Singer as $item)
    <option value="{{$item->id}}">{{$item->Singer_Name}}</option>
    @endforeach
  </select>
</div>


<div class="form-group">
  <input type="text"
    class="form-control" name="Album_Name" id="" aria-describedby="helpId" placeholder="Enter Album Name">
</div>

<div class="form-group">
  <input type="text"
    class="form-control" name="Release_Date" id="" aria-describedby="helpId" placeholder="Enter Release Date">
</div>

<div class="form-group">
  <input type="text"
    class="form-control" name="Total_Track" id="" aria-describedby="helpId" placeholder="Enter Total Track">
</div>

<div class="form-group">
  <label for=""></label>
  <input type="file" name="Album_Image">
</div>

<button type="submit" class="btn btn-primary">Save Album</button>

</form>


<br>
<h3>if you wanna see all Album's then <a href="/Album">Click here</a></h3>


</div>




@endsection