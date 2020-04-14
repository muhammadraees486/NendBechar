@extends('AdminPanel.Layout.Layout')
@section('title','Add Singer')
@section('Contant')

<div class="container">
    <h1>Add Singer Here</h1>
</div>

<div class="container">
    
<form action="/Singer" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
  <input type="text"
    class="form-control" name="Singer_Name" id="" aria-describedby="helpId" placeholder="Enter Singer Name">
</div>

<div class="form-group">
                <label for="">Select Collection</label>
                <select class="form-control" name="Collection_Id" id="">
                    @foreach ($Collection as $item)
                <option value="{{$item->id}}">{{$item->Collection}}</option>      
                    @endforeach
                  
                </select>
              </div>

<div class="form-group">
  <input type="file"
     name="Singer_Image" accept=".png , .jpeg , .jpg">
</div>


<button type="submit" class="btn btn-primary">Save Singer</button>

</form>
<br><br>
<h2>if don't wanna see All Singer ther 
<a href="/Singer">Click Here</a>
</h2>

</div>


@endsection