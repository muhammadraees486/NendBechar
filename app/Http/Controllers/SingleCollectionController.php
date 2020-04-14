<?php

namespace App\Http\Controllers;

use App\SingleCollection;
use Illuminate\Http\Request;

class SingleCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_Single=SingleCollection::all();
        return view('AdminPanel.Single.AllSingle',['AllSingle'=>$All_Single]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('AdminPanel.Single.AddSingle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('Album_Image');
        $new_name=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_Path('/Images/Single/'),$new_name);
        $form_data=array(
            'Singer_Name'=>$request->Singer_Name,
            'Album_Name'=>$request->Album_Name,
            'Track_Name'=>$request->Track_Name,
            'Track_Url'=>$request->Track_Url,
            'Album_Image'=>$new_name

        );
        SingleCollection::create($form_data);
        return redirect('/Single');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SingleCollection  $singleCollection
     * @return \Illuminate\Http\Response
     */
    public function show(SingleCollection $singleCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SingleCollection  $singleCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(SingleCollection $singleCollection ,$id)
    {
        $edit=SingleCollection::find($id);
        return view('AdminPanel.Single.UpdateSingle',['Edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SingleCollection  $singleCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name=$request->hidden_image;
        $image = $request->file('Album_Image');
        if($image != ''){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_Path('Images/Single'),$image_name);
        } 
        else
        {
        }
        $form_data=array(
            'Singer_Name'=>$request->Singer_Name,
            'Album_Name'=>$request->Album_Name,
            'Track_Name'=>$request->Track_Name,
            'Track_Url'=>$request->Track_Url,
            'Album_Image'=>$image_name
        ); 
        SingleCollection::whereId($id)->update($form_data); 
return redirect('/Single');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SingleCollection  $singleCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(SingleCollection $singleCollection,$id)
    {
        $delete=SingleCollection::destroy($id);
        return redirect('/Single');
    }
}
