@extends('AdminPanel.Layout.Layout')
@section('title','Add single')
@section('Contant')

<div class="container">
    <h1>Add Single</h1>



    <form action="/Single" method="post" enctype="multipart/form-data">
        @csrf
    
    <div class="form-group">
      <input type="text"
        class="form-control" name="Singer_Name" id="" aria-describedby="helpId" placeholder="Enter Singer Name">
    </div>
    
    <div class="form-group">
        <input type="text"
          class="form-control" name="Album_Name" id="" aria-describedby="helpId" placeholder="Enter Album Name">
      </div>

      <div class="form-group">
        <input type="text"
          class="form-control" name="Track_Name" id="" aria-describedby="helpId" placeholder="Enter Track Name">
      </div>

      <div class="form-group">
        <input type="text"
          class="form-control" name="Track_Url" id="" aria-describedby="helpId" placeholder="Enter Track Url">
      </div>


      <div class="form-group">
        <label for="">Select Album Image</label>
        <input type="file" class="form-control-file" name="Album_Image" >
      </div>
      
    <button type="submit" class="btn btn-primary">Save Single</button>
    
    </form>

    <h3>if you wanna see All Single Collection <a href="/Single">Click Here</a></h3>

</div>



@endsection