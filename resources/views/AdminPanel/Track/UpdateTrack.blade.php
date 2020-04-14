@extends('AdminPanel.Layout.Layout')
@section('title','Update Track')
@section('Contant')

<div class="container">
    <h1>Add Track</h1>

<br>

<form action="/Track/{{$Track->id}}" method="post">

@csrf
@method('PUT')

<div class="form-group">
  <label for="">Select Collection</label>
  <select class="form-control" name="Collection_Id" id="">
  @foreach($Collection as $item)
    <option value="{{$item->id}}">{{$item->Collection}}</option>
  @endforeach
  </select>
  @foreach($Edit as $item)
<h3>{{$item->Collection}}</h3>
@endforeach
</div>


<div class="form-group">
  <label for="">Select Singer</label>
  <select class="form-control" name="Singer_Id" id="">
  @foreach($Singer as $item)
    <option value="{{$item->id}}">{{$item->Singer_Name}}</option>
  @endforeach
  </select>
  @foreach($Edit as $item)
<h3>{{$item->Singer_Name}}</h3>
@endforeach
</div>



<div class="form-group">
  <label for="">Select Album</label>
  <select class="form-control" name="Album_Id" id="">
    @foreach($Album as $item)
    <option value="{{$item->id}}">{{$item->Album_Name}}</option>
@endforeach
  </select>
  @foreach($Edit as $item)
<h3>{{$item->Album_Name}}</h3>
@endforeach
</div>


<div class="form-group">
  <input type="text"
    class="form-control" value="{{$Track->Track_Name}}" name="Track_Name" id="" aria-describedby="helpId" placeholder="Track Name">
 </div>

 <div class="form-group">
  <input type="text"
    class="form-control" value="{{$Track->Track_Url}}" name="Track_Url" id="" aria-describedby="helpId" placeholder="Track URL">
 </div>


 <button type="submit" class="btn btn-primary">Save Track</button>


</form>


<h2>if You Wanna See All Track <a href="/Track">Click here</a></h2>


</div>




@endsection