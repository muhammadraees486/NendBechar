<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $All_Slider=Slider::all();
        return view('AdminPanel.Slider.AllSlider',['AllSlider'=>$All_Slider]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Slider.AddSlider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file('Slider_Image');
        $new_name=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_Path('Images/Slider'),$new_name);

        $form_data=array(
            'Title'=>$request->Title,
            'Description'=>$request->Description,
            'Slider_Image'=>$new_name
        );
        Slider::create($form_data);
        return redirect('/Slider');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider,$id)
    {
        $eidt=Slider::find($id);
        return view('AdminPanel.Slider.UpdateSlider',['Edit'=>$eidt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $image_name=$request->hidden_image;
        $image = $request->file('Slider_Image');
        if($image != ''){
            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_Path('Images/Slider'),$image_name);
        } 
        else
        {
        }
        $form_data=array(
            'Title'=>$request->Title,
            'Description'=>$request->Description,
            'Slider_Image'=>$image_name
        ); 
        Slider::whereId($id)->update($form_data); 
return redirect('/Slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider,$id)
    {
        $delete=Slider::destroy($id);
        return redirect('/Slider');
    }
}
