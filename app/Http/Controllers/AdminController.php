<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin');
    }



    public function roomtype()
    {
      $count=Roomtype::all()
      ->count();

      return view('backend.roomtype')->with('count',$count);
    }
    public function InsertRoomType(Request $request)
    {
      $this->validate($request,[
        'type_name'=>'required | max:150',
        'type_description'=>'required',
        'type_price'=>'required',
        'type_adult'=>'required',
        'type_child'=>'required',
        'type_beds'=>'required',


      ]);

      $room_type=new Roomtype([
        'type_name'=>$request->input('type_name'),
        'type_description'=>$request->input('type_description'),
        'type_adult'=>$request->input('type_adult'),
        'type_child'=>$request->input('type_child'),
        'type_beds'=>$request->input('type_beds')
      ]);

      $room_type->save();


      return redirect()->route('admin.roomtypes')->with('success','Successfully Room Type Added');


    }
}
