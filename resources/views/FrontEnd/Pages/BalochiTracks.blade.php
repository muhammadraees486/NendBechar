@extends('FrontEnd.Layout.Layout')
@section('title','Balochi Tracks')
    @section('content')
    
    <br><hr><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <img src="{{URL::to('/')}}/Images/AlbumImage/{{$albm_img->Album_Image}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">

            </div>
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Songs</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1;
                        ?>
                        @foreach ($BalochiTracks as $item)
                            
                      
                        <tr>
                            
                        <td scope="row">{{$count}}</td>
                        <td>{{$item->Track_Name}}</td>
                        <td><a name="" id="" class="btn btn-primary" href="/{{$item->Track_Url}}" role="button">Download</a></td>
                        </tr>
                        <?php  $count++ ?>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    @endsection
