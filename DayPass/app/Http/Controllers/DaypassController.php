<?php

namespace App\Http\Controllers;
use App\Http\Requests\DaypassRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Daypass;

class DaypassController extends Controller
{
  public function index(){
    $daypass= Daypass::latest()->paginate(6);
    return view('dashboard') ->with(
    [
        'daypass'=>$daypass
    ] );
  }

  public function show($slug)
  {
      $daypass = Daypass::where('slug',$slug)->first();
      return view('showDaypass')->with([
          'daypass' => $daypass
      ]);
  }
  public function create()
  {
     return view('create');
  }
// ! add
  public function store(DaypassRequest $request)
    {
      // * pour l'image 
   if($request ->has('image'))
   {
      $file=$request->image;
      $image_name=time().'_'.$file->getClientOriginalName();
      $file-> move(public_path('uploads'),$image_name);
   }

      Daypass::create([
         'label'=> $request->label,
         'slug'=> Str::slug($request->label),
         'lieux'=> $request->lieux,
         'description'=> $request->description,
         'service_price'=>$request->service_price,
         'image'=>$image_name,
      ]);
        return redirect()->route('dashboard')->with([
         'success' =>'article ajouté'
        ]);
  
    }

       //  ! delete
 public function delete($slug)
 {
   $daypass=Daypass::where('slug',$slug)->first();
   unlink(public_path('uploads/').$daypass->image);

   $daypass->delete();
   return redirect() -> route('dashboard') ->with([
      'success' =>' bien suprimé'
   ]);
 }

 //  ! edit 
 public function edit($slug)
 {
   $daypass = Daypass::where('slug',$slug)->first();
   return view('edit')->with([
       'daypass' => $daypass
   ]);
 }
//  ! update
 public function update(DaypassRequest $request, $slug)
 {

   $daypass=Daypass::where('slug',$slug) ->first();
   // *pour l'image 
   if($request ->has('image'))
   {
      $file=$request->image;
      $image_name=time().'_'.$file->getClientOriginalName();
      $file->move(public_path('uploads'),$image_name);
      unlink(public_path('uploads/').$daypass->image);
      $daypass->image=$image_name;
   }
   $daypass->update([
      'label'=>$request->label,
      'lieux'=>$request->lieux,
      'service_price'=>$request->service_price,
      'description'=>$request->description,
      'slug'=>Str::slug($request->label),
      'image'=>$daypass->image
   ]);
   return redirect()->route('dashboard')->with([
      'success'=>'article modifié'
   ]);
 }



}
