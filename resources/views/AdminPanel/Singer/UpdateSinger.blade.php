@extends('AdminPanel.Layout.Layout')
@section('title','Update Singer')
@section('Contant')


<div class="container">
    <h1>Update Singer</h1>
</div>

<div class="container">
    <form action="/Singer/{{$Singer->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="form-group">
  <input type="text"
    class="form-control" value="{{$Singer->Singer_Name}}" name="Singer_Name" id="" aria-describedby="helpId" placeholder="">
</div>
<div class="form-group">
  <label for=""></label>
  <select class="form-control" name="Collection_Id" id="">
  @foreach($all_collection as $item)
    <option value="{{$item->id}}">{{$item->Collection}}</option>
    @endforeach
  </select>
<h3>
@foreach($Edit_Singer as $item)
{{$item->Collection}}
@endforeach
</h3>
</div>
<div class="form-group">
        <input type="file" name="Singer_Image">
<img src="{{URL::to('/')}}/Images/SingerImage{{$Singer->Singer_Image}}" height="100px" width="100px;" alt="">

<input type="hidden" name="hidden_image" value="{{$Singer->Singer_Image}}">
      
</div>

<button type="Submit" class="btn btn-primary">Update Singer</button>

    </form>
</div>

@endsection