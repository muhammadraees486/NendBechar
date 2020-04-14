<?php

namespace App\Http\Controllers;

use DB;
use App\Album;
use App\Collection;
use App\Singer;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album=DB::table('albums')
        ->join('collections','collections.id','=','albums.Collection_Id')
        ->join('singers','singers.id','=','albums.Singer_Id')
        ->select('albums.id','albums.Album_Name','albums.Album_Image','albums.Release_Date',
        'albums.Total_Track','collections.Collection','singers.Singer_Name')
        ->get();
       
        return view('AdminPanel.Album.AllAlbum',['Album'=>$album]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Collection=Collection::all();
        $Singer=Singer::all();
        return view('AdminPanel.Album.AddAlbum',['Singer'=>$Singer,'Collection'=>$Collection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Image=$request->file('Album_Image');
        $new_name=rand().'.'.$Image->getClientOriginalExtension();
        $Image->move(Public_Path('Images/AlbumImage'),$new_name);
        $form_data=array(
            'Collection_Id'=>$request->Collection_Id,
            'Singer_Id'=>$request->Singer_Id,
            'Album_Name'=>$request->Album_Name,
            'Release_Date'=>$request->Release_Date,
            'Total_Track'=>$request->Total_Track,
            'Album_Image'=>$new_name

        );
Album::create($form_data);
return redirect('/Album');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album,$id)
    {

        $Edit=DB::table('albums')
        ->join('collections','collections.id','=','albums.Collection_Id')
        ->join('singers','singers.id','=','albums.Singer_Id')
        ->where('albums.id','=',$id)
        ->select('collections.Collection','singers.Singer_Name')
        ->get();
        $collection=Collection::all();
        $singer=Singer::all();
        $album=Album::find($id);
        return view('AdminPanel.Album.UpdateAlbum',['album'=>$album,'edit'=>$Edit,'collection'=>$collection,'singer'=>$singer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img_name=$request->hidden_image;
        $img=$request->file('Album_Image');
    if($img!=""){
        $img_name=rand().'.'.$img->getClientOriginalExtension();
        $img->move(public_Path('/Images/AlbumImage'),$img_name);
    }
    else{

    }
    $form_data=array(
        'Collection_Id'=>$request->Collection_Id,
        'Singer_Id'=>$request->Singer_Id,
        'Album_Name'=>$request->Album_Name,
        'Release_Date'=>$request->Release_Date,
        'Total_Track'=>$request->Total_Track,
        'Album_Image'=>$img_name
    );
Album::whereId($id)->update($form_data);
return redirect('/Album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album , $id)
    {
        $delete=Album::destroy($id);
        return redirect('/Album');
    }
}
