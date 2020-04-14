<?php

namespace App\Http\Controllers;

use App\Track;
use App\Collection;
use App\Singer;
use App\Album;
use DB;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $track=DB::table('tracks')
        ->join('collections','collections.id','=','tracks.Collection_Id')
        ->join('singers','singers.id','=','tracks.Singer_Id')
        ->join('albums','albums.id','=','tracks.Album_id')
        ->select('tracks.id','collections.Collection','singers.Singer_Name','albums.Album_Name',
          'tracks.Track_Name','tracks.Track_Url')
          ->get();
        return view('AdminPanel.Track.AllTrack',['Track'=>$track]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection=Collection::all();
        $singer=Singer::all();
        $album=Album::all();
        return view('AdminPanel.Track.AddTrack',['Collection'=>$collection,'Singer'=>$singer,'Album'=>$album]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $track=new Track();
        $track->Collection_Id=$request->input('Collection_Id');
        $track->Singer_Id=$request->input('Singer_Id');
        $track->Album_Id=$request->input('Album_Id');
        $track->Track_Name=$request->input('Track_Name');
        $track->Track_Url=$request->input('Track_Url');
        $track->save();
        return redirect('Track/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track ,$id)
    {
        //
        $Collection=Collection::all();
        $Singer= Singer::all();
        $Album=Album::all();
        $Track=Track::find($id);
        $join_edit = DB:: table('tracks')
        ->join('Collections', 'collections.id' , '=' ,'tracks.Collection_Id')
        ->join('singers','singers.id','=','tracks.Singer_Id')
        ->join('Albums','albums.id','=','tracks.Album_Id')
        ->where('tracks.id','=',$id)
        ->select('tracks.id','collections.Collection','singers.Singer_Name','albums.Album_Name',
          'tracks.Track_Name','tracks.Track_Url')
          ->get();
        return view('AdminPanel.Track.UpdateTrack',['Collection'=>$Collection,'Singer'=>$Singer,'Album'=>$Album,'Edit'=>$join_edit,'Track'=>$Track]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $track=Track::find($id);
        $track->Collection_Id=$request->input('Collection_Id');
        $track->Singer_Id=$request->input('Singer_Id');
        $track->Album_Id=$request->input('Album_Id');
        $track->Track_Name=$request->input('Track_Name');
        $track->Track_Url=$request->input('Track_Url');
        $track->save();
        return redirect('Track/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track,$id)
    {
        $delete=Track::destroy($id);
        return redirect('/Track');
    }
}
