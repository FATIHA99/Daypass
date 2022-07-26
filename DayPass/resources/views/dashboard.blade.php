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
    <link rel="stylesheet" type="text/css" href="css/cards.css">
    <link rel="shortcut icon" href="images/logoBack.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    </head>
    
    <body>

<div class="container mt-3 d-flex justify-content-center  shadow-lg p-3 mb-5 bg-body rounded " style="background: rgb(235,54,86);
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
    <div class="container-fluid main-cont mb-5 ">
        <div class="row news-row">
            <div class="container-fluid col-md-12 col-sm-6 justify-content-center news-block">
    

                <div class="card-group ">
                   @foreach ($daypass as $item)
                  <div class="underlay">
                    <div class="card">
                        <div class="card-img-top" style="background-image: url({{ asset('./uploads/'.$item->image) }})"  > </div>

                        <div class="card-block">
                        <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">  {{ $item->label}}<hr style="color: #EB3656"></h5>
                        <h6 class="card-title ps-2 " style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i>{{ $item->lieux}}<hr style="color: #EB3656"></h6>
                        <h6 class="card-text ps-3 " style="font-family: 'Anton', sans-serif" >{{ $item->service_price}} DH</h6> 
                        <p class="card-text p-3" >{{ Str::limit($item->description,50)}}</p> 

                          @if(auth()->check()&& auth()->user()->is_admin)
                           <div>
                          <a href="#" class="btn btn-secondary m-2 "><i class="bi bi-pencil-square"></i></a> 
                          <a href="#" class="btn btn-secondary m-2"><i class="bi bi-trash3"></i></a>
                          <a href="{{route('daypass.show',$item->slug)}}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></p>
                           </div>
                           @else
           

                          <a href="#" class="btn btn-info">Réserver</a> 
                          <a href="#" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></p>
                          @endif
                        </div>
                        </div>
                    </div>
                   
                
                   @endforeach

                 </div>

                 
           


            </div>
        </div>
    </div>
        <div class="my-5">

                 <div class=" d-flex  justify-content-center   mt-5">
                  {{$daypass -> links()}}
                 </div>
        </div>


    <!--=======Scripts======-->
    <script src="jquery-3.1.1.min.js"></script>
    <script name="toggle-grid" type="text/javascript">
    $(document).ready(function(){
      $(document).on("keypress", function(event) {
        // If 'alt + g' keys are pressed:
        if (event.which === 169){
            $('#toggle-grid').toggle();
         }
      });
    
      $('#toggle-grid').on("click"
      , function() {
          $('.pixel-grid').toggle();
          $('#toggle-grid').toggleClass('orange');
        });
    });
    </script>
    </body>
    </html>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script  src="./js/script.js"></script>
  
    </body>
    </html>   
 </x-app-layout> 