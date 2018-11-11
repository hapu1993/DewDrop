<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Room;
use App\Roomtype;

use DB;
class AvailableController extends Controller
{
    //

    public function availability(Request $request)
    {

       $checkin_date1=$request->from;
       $checkout_date1=$request->to;
       $checkin_date2=strtotime($checkin_date1);
       $checkout_date2=strtotime($checkout_date1);
       $checkin_date = date('Y-m-d',$checkin_date2);
       $checkout_date=date('Y-m-d',$checkout_date2);
       $type_id=$request->room_type;
       $no_adult=$request->adults;
       $no_child=$request->child;


       //echo $searchdata;
       // echo $checkin_date;
       // echo $checkout_date;

       // $availables=Reservation::where('check_in', [$checkin_date, $checkout_date])
       //        ->orWhereBetween('check_out', [$checkin_date, $checkout_date])
       //        ->join('rooms','rooms.id','=','reservations.room_id')
       //        ->get();


$total_guest=$no_adult+$no_child;



  // count no of rooms
  if($type_id==""){
$room_types=Roomtype::all();
// getting data from reservation table
//     $availables=Reservation::whereNotBetween('check_in', [$checkin_date, $checkout_date])
//            ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
//            ->join('rooms','rooms.room_id','=','reservations.res_room_id')
//            ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
//           ->get();
//
//
//
//
//     $availables1=Reservation::whereNotBetween('check_in', [$checkin_date, $checkout_date])
//            ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
//            ->join('rooms','rooms.room_id','=','reservations.res_room_id')
//            ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
//            ->where('type_id', $room_types)
//            ->groupBy('room_type_id')
//            ->count();
//
//
//
// // getting data from room table
//     $availables2=Room::where('isFull', '0')
//            ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
//            ->get();
//
//
//
//     $availables3=Room::where('isFull', '0')
//            ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
//            ->count();





    return view('available')

    ->with('type_id',$type_id)

    ->with('room_types',$room_types)
    ->with('total_guest',$total_guest)
    ->with('checkin_date',$checkin_date)
    ->with('checkout_date',$checkout_date);

}
else{
  $room_types=Roomtype::where('type_id', $type_id)
  ->get();
  return view('available')

  ->with('type_id',$type_id)

  ->with('room_types',$room_types)
  ->with('total_guest',$total_guest)
  ->with('checkin_date',$checkin_date)
  ->with('checkout_date',$checkout_date);
}
  //   $room_types=Roomtype::where('type_id', $type_id)->get();
  //   $availables=Reservation::whereNotBetween('check_in', [$checkin_date, $checkout_date])
  //          ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
  //          ->join('rooms','rooms.room_id','=','reservations.res_room_id')
  //          ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
  //          ->where('rooms.room_type_id',$type_id)
  //          ->get();
  //
  //
  //
  //   $availables1=Reservation::whereNotBetween('check_in', [$checkin_date, $checkout_date])
  //          ->WhereNotBetween('check_out', [$checkin_date, $checkout_date])
  //          ->join('rooms','rooms.room_id','=','reservations.res_room_id')
  //          ->join('roomtypes','roomtypes.type_id','=','rooms.room_type_id')
  //          ->where('rooms.room_type_id',$type_id)
  //          ->count();
  //
  //
  //          $availables2=Room::where('isFull', '0')
  //          ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
  //          ->where('rooms.room_type_id',$type_id)
  //          ->get();
  //
  //          $availables3=Room::where('isFull', '0')
  //          ->join('roomtypes','rooms.room_type_id','=','roomtypes.type_id')
  //          ->where('rooms.room_type_id',$type_id)
  //          ->count();
  //
  //
  //   return view('available')->with('availables',$availables)
  //   ->with('availables1', $availables1)
  //   ->with('type_id',$type_id)
  //   ->with('availables2',$availables2)
  //   ->with('availables3',$availables3)
  //   ->with('room_types',$room_types)
  //   ->with('total_guest',$total_guest);
  // }





//
//


     }

}
