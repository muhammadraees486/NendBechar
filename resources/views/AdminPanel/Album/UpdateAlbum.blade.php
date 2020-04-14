@extends('AdminPanel.Layout.Layout')
@section('title','UpdateAlbum')
@section('Contant')

<div class="container">
    <h3>Update Album</h3>
    <br>

<form action="/Album/{{$album->id}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="form-group">
  <label for="">Select Collection</label>
  <select class="form-control" name="Collection_Id" id="">
    @foreach($collection as $item)
    <option value="{{$item->id}}">{{$item->Collection}}</option>
    @endforeach
  </select>
  @foreach($edit as $item)
  <h4>
  {{$item->Collection}}
  </h4>
  @endforeach
</div>


<div class="form-group">
  <label for="">Select Singer</label>
  <select class="form-control" name="Singer_Id" id="">
    @foreach($singer as $item)
    <option value="{{$item->id}}" >{{$item->Singer_Name}}</option>
    @endforeach
  </select>
  @foreach($edit as $item)
  <h4>{{$item->Singer_Name}}</h4>
  @endforeach
</div>


<div class="form-group">
  <input type="text"
    class="form-control" name="Album_Name" value="{{$album->Album_Name}}" id=""  aria-describedby="helpId" placeholder="Album name">
</div>

<div class="form-group">
  <input type="text"
    class="form-control" name="Release_Date" value="{{$album->Release_Date}}" id="" aria-describedby="helpId" placeholder="Admun Release Date">
</div>


<div class="form-group">
  <input type="text"
    class="form-control" name="Total_Track" value="{{$album->Total_Track}}" id="" aria-describedby="helpId" placeholder="Album Total Track">
</div>


<div class="form-group">
        <input type="file" name="Album_Image">
<img src="{{URL::to('/')}}/Images/AlbumImage/{{$album->Album_Image}}" height="100px" width="100px;" alt="">

<input type="hidden" name="hidden_image" value="{{$album->Album_Image}}">
      
</div>

<button type="submit" class="btn btn-primary">Update Album</button>

</form>

</div>




@endsection