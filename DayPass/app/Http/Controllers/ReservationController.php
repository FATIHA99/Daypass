<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daypass;
use Illuminate\Support\Str;
use App\Models\Reservation;

class ReservationController extends Controller
{
 //  !reserver

public function reserver($slug)
{
   $daypass = Daypass::where('slug',$slug)->first();
   // $daypass = DB::table('daypasses')->select('service_price');
   return view('reserverForm')->with([
       'daypass' => $daypass
   ]);
}
// !reserver 
public function StoreReservation(Request $request,$slug)
    {   $daypass = Daypass::where('slug',$slug)->first();


          Reservation::create([
         'cin'=> $request->cin,
         'email'=> $request->email,
         'date_entrer'=> $request->date_entrer,
         'date_sortie'=> $request->date_sortie,
         'nombre_personne'=>$request->nombre_personne,
         'is_valid'=>false,
         'id_user'=>auth()->user()->id,
         'id_daypass'=>$daypass->id,
         'services'=>$request->service1.','.$request->service2 .','.$request->service3 .','.$request->service4 ?? 'empty' ,

        //  'services'=>$request->service1 .'-'.$request->service2 .'-'.$request->service3 .'-'.$request->service4,
        ]);
        return redirect()->route('dashboard')->with([
         'success' =>'Daypass reservé',
         'daypass'=> $daypass->id,
        ]);
  
    }
    // !show reservation user 
    public function ReservationsUser()
    { 
        $reservation = Reservation::where('id_user', '=',auth()->user()->id)->get();
        return view('reservation')
    
        ->with([
            'reservation'=> $reservation,
        ]);

    }

       //  ! delete
       public function delete($id)
       {
         $reservation=Reservation::where('id',$id)->first();
        //  unlink(public_path('uploads/').$reservation->image);
      
         $reservation->delete();
         return redirect() -> route('dashboard') ->with([
            'success' =>' Annuleé'
         ]);
       }

          // !show reservation user 
    public function AllReservation()
    { 
        $reservation = Reservation::all();        
        return view('reservation')
    
        ->with([
            'reservation'=> $reservation,
        ]);
    }

    public function status(Request $request,$id)
    {
        $reservation = Reservation::where('id',$id)->first();
        $name=$id;
        // dd($request->all());
          if($request->$name == '1')
           {    $reservation->update([
             'is_valid'=> 1,
              ]);
           }
           
           
           if($request->$name == '2')
           {    $reservation->update([
             'is_valid'=> 2,
              ]);
           }

           if($request->$name == '3')
           {    $reservation->update([
             'is_valid'=> 3,
              ]);
           }
           $res = Reservation::all();        

           return view('reservation')
    
           ->with([
               'reservation'=> $res,
           ]);
           
    }



}
