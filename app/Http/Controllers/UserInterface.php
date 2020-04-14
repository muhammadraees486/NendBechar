<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Album;
use App\Singer;
use DB;
use App\Collection;
use App\Track;
use App\SingleCollection;
class UserInterface extends Controller
{
    //
    public function  index()
    {
        $Slider = Slider::all();
        $ganook=4;
        $album=Album::latest()->limit($ganook)->where('Collection_Id','=',1) ->get();
        $Kharani=Album::latest()->limit($ganook)->where('Collection_Id','=',2) ->get();
        $Wedding=Album::latest()->limit($ganook)->where('Collection_Id','=',3) ->get();
        $Single=SingleCollection::latest()->limit($ganook)->get();
        return view ('welcome',['Album'=>$album,'Kharani'=>$Kharani,'Wedding'=>$Wedding,'Single'=>$Single]);
    }

    public function Balochi_Singers()
    {
        $BalochiSinger=Singer::OrderBy('Singer_Name')->where('Collection_Id','=',1)->get();
        return view('FrontEnd.Pages.BalochiSingers',['BalochiSinger'=>$BalochiSinger]);
    }
    public function Kharani_Singers()
    {
        $KharaniSinger=Singer::OrderBy('Singer_Name')->where('Collection_Id','=',2)->get();
        return view('FrontEnd.Pages.KharaniSingers',['KharaniSinger'=>$KharaniSinger]);
    }

    public function Balochi_Albums($id)
    {
        $BalochiAlbums=DB::table('albums')
->join('collections','collections.id','=','albums.Collection_Id')
->join('singers','singers.id','=','albums.Collection_Id')
->where('albums.Singer_Id','=',$id)
->select('albums.id','albums.Album_Name','albums.Album_Image')
->get();
// $BalochiAlbums=Album::find($id);
        return view('FrontEnd.Pages.BalochiAlbums',['BalochiAlbums'=>$BalochiAlbums]);
    }


    public function Nav_Collection($id)
    {
        $BalochiAlbums=DB::table('singers')
        
        ->join('singers','singers.id','=','singers.Collection_Id')
        ->where('singers.Collection_Id','=',$id)
        ->select('singers.id','singers.Singer_Name','singers.Singer_Image')
        ->get();
        return view('FrontEnd.Pages.KharaniSingers',['nav_col'=>$BalochiAlbums]);
    }

    public function Find_Track($id){

        $albm_img=Album::find($id);
        $BalochiTracks=Track::where('Album_Id','=',$id)->get();
       return view ('FrontEnd.Pages.BalochiTracks',['BalochiTracks'=>$BalochiTracks,'albm_img'=>$albm_img]);


    }


}
