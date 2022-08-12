<x-app-layout>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css"> -->
    <title>Daypass</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" type="image/png" href="…"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="css/cards.css"> --}}
    <link rel="shortcut icon" href="images/logoBack.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<style> 
.card{
  margin: 5% 0%;
}

.card-body{
  margin: 0% 0% 0% 3%;
  padding: 6% 0%;
}


</style>

    </head>
    
    <body>

<div class="container mt-3 d-flex justify-content-center  shadow-sm p-3 mb-5 bg-body rounded " style="background: rgb(235,54,86);
background: linear-gradient(253deg, rgba(235,54,86,0.3841911764705882) 25%, rgba(249,249,249,0.9836309523809523) 98%);">
 
   <select class="h-25 border-0  rounded bg-light ms-5 mt-3" aria-label="Disabled select example" >
    <option value="0">chercher par prix </option>
    <option value="1"> 100-300 DH</option>
    <option value="2">300-500 DH</option>
    <option value="3">500-1000 DH </option>
  </select>

  <select class="h-25 border-0  rounded bg-light ms-5 mt-3" aria-label="Disabled select example" >
    <option value="0">chercher par service </option>
    <option value="1"> Spas</option>
    <option value="2">piscines</option>
    <option value="3">fitnes</option>
    <option value="3">Brunches</option>
  </select>
  @if(auth()->check()&& auth()->user()->is_admin)
  
  <a class="btn btn-light m-3" href="{{route('daypass.create')}}" > Ajouter Daypass </a>

 
@endif
</div>
  {{--  --}}


  @if(session()->has('success'))

<div class="d-flex justify-content-center"> 
  <div class="div alert  col-4  alert-success">
    {{session()->get('success')}}
  
  </div>
</div>
  @endif


  <div class="container">
   
    <!-- Card deck -->
    <div class="card-deck row">



     @foreach ($daypass as $item)
     
      <div class="col-xs-12 col-sm-6 col-md-4">
      <!-- Card --> 
      
      <div class="card ">
    
        <!--Card image-->
        <div class="  col-xs-12  col-md-12" style="background-image: url({{asset('./uploads/'.$item->image) }});
          background-size:cover; height:300px; width:100% " >
          {{-- <img class="card-img-top" src="" alt="Card image cap"> --}}
         
        </div>
    
        <!--Card content-->
        <div class="card-body">
    
          <!--Title-->
          <h4 class="card-title">{{ $item->label}}</h4>
          <!--Text-->
          <p class="card-text">{{ $item->lieux}} </p>
          <p class="card-text">{{ $item->service1_price}} </p>
          <p class="card-text">{{ $item->service2_price}} </p>
          <p class="card-text">{{ $item->service3_price}} </p>
          <p class="card-text">{{ $item->service4_price}} </p>

          <p class="card-text">{{ Str::limit($item->description,50)}}</p>

          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          @if(auth()->check()&& auth()->user()->is_admin)

          <div class="row">
      {{-- edit --}}
      <div class="col-2"> 
              <a href="{{route('daypass.edit',$item->slug)}}" class="btn btn-secondary  "><i class="bi bi-pencil-square"></i></a> 
      </div>
            <div class="col-2">   
            <form id="{{$item->id}}" action="{{route('daypass.delete',$item->slug)}}" method="POST">
                @csrf
                @method('DELETE')
            </form> 
            {{-- delete --}}
            <button type="submit" class="btn btn-danger"
            onclick="event.preventDefault();
            if(confirm('voulez vous supprimer ce poste ?'))
            document.getElementById({{$item->id}}).submit();">
              <i class="bi bi-trash3"></i>
            </button>
      </div>
     
      {{-- show --}}
      <div class="col-2">   

              <a href="{{route('daypass.show',$item->slug) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></p>
      </div>
               
            </div>
                @else
              <a href="{{route('daypass.reserver',$item->slug)}}" class="btn btn-info">Réserver</a> 
              <a href="{{route('daypass.show',$item->slug) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></p>
              @endif    
        </div>
    
      </div> 
      <!-- Card -->
      </div> 
      
      
      
      @endforeach
    </div>  
    
      
   
  
  </div>


 <div class="my-5">

                 <div class=" d-flex  justify-content-center   mt-5">
                  {{$daypass -> links()}}
                 </div>
 </div>
    
    </body>
    </html>   
 </x-app-layout> 