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
  
  <button class="btn btn-light m-3" > Ajouter Daypass </button>
@endif
  
</div>
    <div class="container-fluid main-cont ">
        <div class="row news-row">
            <div class="container-fluid col-md-12 col-sm-6 justify-content-center news-block">

                <div class="card-group ">
                  <div class="underlay">
                    <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-1.jpg')"></div>
                        <div class="card-block" >
                        <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">  Hotel africa<hr style="color: #EB3656"></h5>
                        <h6 class="card-title ps-2 " style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr style="color: #EB3656"></h6>
                        <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. 
                          @if(auth()->check()&& auth()->user()->is_admin)
  
                          <a href="#" class="btn btn-info">Modifier</a> 
                          <a href="#" class="btn btn-info">Supprimer</a></p>
                           @else
                          
                          <a href="#" class="btn btn-info">Réserver</a> 
                          <a href="#" class="btn btn-info"><i class="bi bi-eye-fill"></i></a></p>
                          @endif
                        </div>
                    </div>
                  </div>



                  <div class="underlay">
                   <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-2.jpg') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. 
                            <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-3.jpg') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-4.jpg') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text ps-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-5.jpg') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2"  style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-6.jpg'); background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('assets/p-7.jpg') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('https://i.imgur.com/M8PGoML.png') ;background-size:cover;"></div>
                        <div class="card-block" >
                          <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                          <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                          <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                          </div>
                      </div>
                    </div>
                    <div class="underlay">
                      <div class="card">
                        <div class="card-img-top" style="background-image: url('https://i.imgur.com/Hp8NxLI.png') ;background-size:cover;"></div>
                       <div class="card-block" >
                        <h5 class="card-title p-2" style="font-family: 'Anton', sans-serif">Hotel africa<hr></h5>
                        <h6 class="card-title ps-2" style="font-family: 'Anton', sans-serif"> <i class="bi bi-geo-alt"></i> Rue atlas<hr></h6>
                        <p class="card-text p-3" >Les Terrasses du Lac Marrakech vous propose de vous détendre autour de leur belle piscine à débordement en sirotant un délicieux cocktail maison ou en dégustant les délices du chef. <a href="#" class="btn btn-info">voir les details</a></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------- for Admin -------------->


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