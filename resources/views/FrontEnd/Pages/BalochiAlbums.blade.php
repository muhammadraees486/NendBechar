@extends('FrontEnd.Layout.Layout')
@section('title','Balochi Singers')
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-10" style="background-color: lightslategray;border-radius: 6px;">
                    <h3 class="text-white" style="width: 380px;margin-left:12px  ">Balochi Album </h3>
                    {{-- <div style="float: right;margin-top: -39px;margin-right:12px ">
                    <a name="" id="" class="btn btn-primary" href="#" role="button">View More</a>
                    </div> --}}
                    <hr>
                        @foreach ($BalochiAlbums as $item)          
                        <div style="float:left; margin-left: 20px;">
                        <a href="/FindTrack/{{$item->id}}">   <img height="200px;" width="170px;" src="{{URL::to('/')}}/Images/AlbumImage/{{$item->Album_Image}}" alt="Singers"></a>

                            <h6 class="text-center">{{$item->Album_Name}}</h6>
                        </div>
                        @endforeach    
                      
                </div>
            </div>
            
        </div>
    </div>
        
    @endsection