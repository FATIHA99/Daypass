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
}
