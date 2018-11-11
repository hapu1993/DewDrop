<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth:admin');
     }


    public function index()
    {
        //
        return view('backend.roomtype');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // validate the roomtype forms
        $this->validate($request,[
          'type_name'=>'required | max:150',
          'type_description'=>'required',
          'type_price'=>'required',
          'type_adult'=>'required',
          'type_child'=>'required',
          'type_beds'=>'required',
          'type_img1'=>'required| file | max:2000 | image|mimes:jpeg,png,jpg,gif,svg',
          'type_img2'=>'required| file | max:2000 | image|mimes:jpeg,png,jpg,gif,svg',
          'type_img3'=>'required| file | max:2000 | image|mimes:jpeg,png,jpg,gif,svg',
          'type_img4'=>'required| file | max:2000 | image|mimes:jpeg,png,jpg,gif,svg',
          'type_img5'=>'required| file | max:2000 | image|mimes:jpeg,png,jpg,gif,svg'

        ]);

        $upload1=$request->file('type_img1');
        $upload2=$request->file('type_img2');
        $upload3=$request->file('type_img3');
        $upload4=$request->file('type_img4');
        $upload5=$request->file('type_img5');

$path1=$upload1->store('public/storage');
$path2=$upload2->store('public/storage');
$path3=$upload3->store('public/storage');
$path4=$upload4->store('public/storage');
$path5=$upload5->store('public/storage');

$room_type=Roomtype::create([
  'type_name'=>$request->input('type_name'),
  'type_description'=>$request->input('type_description'),
  'type_adult'=>$request->input('type_adult'),
  'price'=>$request->input('type_price'),
  'type_child'=>$request->input('type_child'),
  'type_beds'=>$request->input('type_beds'),
  'type_img1'=>$path1,
  'type_img2'=>$path2,
  'type_img3'=>$path3,
  'type_img4'=>$path4,
  'type_img5'=>$path5



]);
return redirect()->route('admin.roomtypes')->with('success','Successfully Room Type Inserted');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
