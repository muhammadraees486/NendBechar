@extends('AdminPanel.Layout.Layout')
@section('title','Add Track')
@section('Contant')

<div class="container">
    <h1>Add Track</h1>

<br>

<form action="/Track" method="post">

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
  <label for="">Select Singer</label>
  <select class="form-control" name="Singer_Id" id="">
  @foreach($Singer as $item)
    <option value="{{$item->id}}">{{$item->Singer_Name}}</option>
  @endforeach
  </select>
</div>



<div class="form-group">
  <label for="">Select Album</label>
  <select class="form-control" name="Album_Id" id="">
    @foreach($Album as $item)
    <option value="{{$item->id}}">{{$item->Album_Name}}</option>
@endforeach
  </select>
</div>


<div class="form-group">
  <input type="text"
    class="form-control" name="Track_Name" id="" aria-describedby="helpId" placeholder="Track Name">
 </div>

 <div class="form-group">
  <input type="text"
    class="form-control" name="Track_Url" id="" aria-describedby="helpId" placeholder="Track URL">
 </div>


 <button type="submit" class="btn btn-primary">Save Track</button>


</form>


<h2>if You Wanna See All Track <a href="/Track">Click here</a></h2>


</div>




@endsection