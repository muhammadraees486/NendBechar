@extends('AdminPanel.Layout.Layout')
@section('title','Update Slider')
@section('Contant')

<div class="container">
    <h2>Update Slider</h2>

<form action="/Slider/{{$Edit->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
  <input type="text"
    class="form-control" value="{{$Edit->Title}}" name="Title" id="" aria-describedby="helpId" placeholder="Enter Title">
</div>


<div class="form-group">
  <input type="text"
    class="form-control" value="{{$Edit->Description}}" name="Description" id="" aria-describedby="helpId" placeholder="Enter DEscription">
</div>


<div class="form-group">
        <input type="file" name="Slider_Image">
<img src="{{URL::to('/')}}/Images/Slider/{{$Edit->Slider_Image}}" height="100px" width="100px;" alt="">

<input type="hidden" name="hidden_image" value="{{$Edit->Slider_Image}}">
      
</div>

<button type="submit" class="btn btn-primary">Update Slider</button>
</form>



</div>



@endsection