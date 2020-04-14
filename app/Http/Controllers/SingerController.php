<?php

namespace App\Http\Controllers;

use App\Singer;
use DB;
use App\Collection;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_Singer=DB::table('singers')
        ->join('collections','collections.id','=','singers.Collection_Id')
        ->select('singers.id','singers.Singer_Name','singers.Singer_Image',
        'collections.Collection')
        ->get();
        return view('AdminPanel.Singer.AllSinger',['All_Singer'=>$All_Singer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collection=Collection::all();
        return view('AdminPanel.Singer.AddSinger',['Collection'=>$collection]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Add_Singer=$request->file('Singer_Image');
        $New_Name=rand().'.'.$Add_Singer->getClientOriginalExtension();
        $Add_Singer->move(Public_Path('Images/SingerImage/'),$New_Name);
        $form_data=array(
                'Singer_Name'=>$request->Singer_Name,
                'Collection_Id'=>$request->Collection_Id,
                'Singer_Image'=>$New_Name
            
        );
        Singer::create($form_data);
        return redirect('/Singer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function show(Singer $singer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function edit(Singer $singer ,$id)
    {        
        $Edit_Singer=DB::table('singers')
        ->join('collections','collections.id','=','singers.Collection_Id')
        ->where('singers.id','=',$id)
        ->select('singers.id','singers.Singer_Name','singers.Singer_Image','collections.id',
        'collections.Collection')
        ->get();
        $singer=Singer::find($id);
        $collection=Collection::all();
        return view('AdminPanel.Singer.UpdateSinger',['all_collection'=>$collection,'Edit_Singer'=>$Edit_Singer,'Singer'=>$singer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $image_name=$request->hidden_image;
        $image = $request->file('Singer_Image');
        if($image != ''){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_Path('Images/SingerImage'),$image_name);
        } 
        else
        {
        }
        $form_data=array(
            'Singer_Name'=>$request->Singer_Name,
            'Collection_Id'=>$request->Collection_Id,
            'Singer_Image'=>$image_name
        ); 

Singer::whereId($id)->update($form_data); 
return redirect('/Singer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Singer $singer,$id)
    {
        $Delete=Singer::destroy($id);
        return redirect('/Singer');
    }
}
