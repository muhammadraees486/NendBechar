@extends('AdminPanel.Layout.Layout')
@section('title','Update Single')
@section('Contant')

<div class="container">
    <h2>Update single collection</h2>

<form action="/Single/{{$Edit->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="form-group">
  <label for="">Singer Name</label>
  <input type="text"
class="form-control" name="Singer_Name" value="{{$Edit->Singer_Name}}" id="" aria-describedby="helpId" placeholder="">
</div>

<div class="form-group">
    <label for="">Album Name</label>
    <input type="text"
class="form-control" name="Album_Name" value="{{$Edit->Album_Name}}" id="" aria-describedby="helpId" placeholder="">
  </div>


  <div class="form-group">
    <label for="">Track Name</label>
    <input type="text"
  class="form-control" name="Track_Name" value="{{$Edit->Track_Name}}" id="" aria-describedby="helpId" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Track Url</label>
    <input type="text"
      class="form-control" name="Track_Url" value="{{$Edit->Track_Url}}" id="" aria-describedby="helpId" placeholder="">
  </div>

  <div class="form-group">
    <input type="file" name="Album_Image">
<img src="{{URL::to('/')}}/Images/Single/{{$Edit->Album_Image}}" height="100px" width="100px;" alt="">

<input type="hidden" name="hidden_image" value="{{$Edit->Album_Image}}">
  
</div>

<button type="submit" class="btn btn-primary">Update single</button>


</form>


</div>

@endsection