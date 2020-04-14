@extends('FrontEnd.Layout.Layout')
@section('title','WelCome')
    @section('content')
<!-- Slider Start -->


<div class="container-fluid" style="background-color: grey; ">
    
    <div class="row">
        <div class="col-md-8">
            <div style="background-color: lightslategray;margin-top: 20px; width: 90%;float: right;border-radius: 15px;">
                <h3 style="width: 380px;margin-left:12px  ">Balochi Latest Album's</h3>
                <div style="float: right;margin-top: -39px;margin-right:12px ">
                <a name="" id="" class="btn btn-primary" href="#" role="button">View More</a>
                </div>
                <hr>
                    @foreach ($Album as $item)          
                    <div style="float: left ; margin-left: 20px;">
                        <a href="/FindTrack/{{$item->id}}">
                        <img height="200px;" width="170px;" src="{{URL::to('/')}}/Images/AlbumImage/{{$item->Album_Image}}" alt="">
                        </a>
                        <h6 style="">{{$item->Album_Name}}</h6>
                    </div>
                    @endforeach    
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color: lightslategray;margin-top: 50px;">
                <h2>Administrator</h2>
                <table style="border:none" class="table">
                    <thead>
                        <tr>
                            <th style="border:none">Team Alpha's</th>
                        </tr>
                    </thead>
                    <tbody style="border:none">
                        <tr>
                            <td>Siraj Hassni</td>
                            <td>M.Raees</td>
                            <td>Lucky Baloch</td>
                            <td>Noman Ali</td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-8">
            <div style="background-color: lightslategray;margin-top: 20px; width: 90%;float: right;border-radius: 15px;">
                <h3 style="width: 380px;margin-left:12px  ">Kharani Latest Album's</h3>
                <div style="float: right;margin-top: -39px;margin-right:12px ">
                <a name="" id="" class="btn btn-primary" href="#" role="button">View More</a>
                </div>
                <hr>
                    @foreach ($Kharani as $item)          
                    <div style="float:left; margin-left: 20px;">
                    <a href="/FindTrack/{{$item->id}}">
                        <img height="200px;" width="170px;" src="{{URL::to('/')}}/Images/AlbumImage/{{$item->Album_Image}}" alt="">
                        </a>
                        <h6 style="">{{$item->Album_Name}}</h6>
                    </div>
                    @endforeach    
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>



    <div class="row">
        <div class="col-md-8">
            <div style="background-color: lightslategray;margin-top: 20px; width: 90%;float: right;border-radius: 15px;">
                <h3 style="width: 380px;margin-left:12px  ">Wedding Latest Album's</h3>
                <div style="float: right;margin-top: -39px;margin-right:12px ">
                <a name="" id="" class="btn btn-primary" href="#" role="button">View More</a>
                </div>
                <hr>
                    @foreach ($Wedding as $item)          
                    <div style="float:left; margin-left: 20px;">
                        <img height="200px;" width="170px;" src="{{URL::to('/')}}/Images/AlbumImage/{{$item->Album_Image}}" alt="">

                        <h6 style="">{{$item->Album_Name}}</h6>
                    </div>
                    @endforeach    
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>



    <div class="row">
        <div class="col-md-8">
            <div style="background-color: lightslategray;margin-top: 20px; width: 90%;float: right;border-radius: 15px;">
                <h3 style="width: 380px;margin-left:12px  ">Single Latest Album's</h3>
                <div style="float: right;margin-top: -39px;margin-right:12px ">
                <a name="" id="" class="btn btn-primary" href="#" role="button">View More</a>
                </div>
                <hr>
                    @foreach ($Single as $item)          
                    <div style="float:left; margin-left: 20px;">
                        <img height="200px;" width="170px;" src="{{URL::to('/')}}/Images/Single/{{$item->Album_Image}}" alt="">

                        <h6 style="">{{$item->Album_Name}}</h6>
                    </div>
                    @endforeach    
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>




    
</div>
@endsection