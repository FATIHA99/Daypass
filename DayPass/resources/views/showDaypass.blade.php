<x-app-layout>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>daypass</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/styleShow.css">
    </head>
    <body>
       
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 IMMG" src="{{asset('uploads/'.$daypass->image)}})" alt="Daypass" /></div>
                    <div class="col-md-6">
                        <!-- <div class="small mb-1">SKU: BST-498</div> -->
                        <h1 class="display-5 fw-bolder">{{$daypass->label}}</h1>
                        <div class="fs-5 mb-5">
                            <!-- <span class="text-decoration-line-through">$45.00</span> -->
                            <div class="cont ">
                                <div class="price">À partir de </div>
                                <div class="price2">  {{$daypass->service_price}} </div>
                                <div class="price3">  DHS </div>
                            </div>
                        </div>
                        <p class="lead">{{$daypass->description}}</p>
                        
                    </div>
                    <div class="d-flex justify-content-end">
                    <button class="bttnn text-white " type="button" class="btn btn-secondary btn-lg">Clic here</button>
                </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class=" bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <H1 class=""> Situation</H1>
                <h2> {{$daypass->lieux}} </h2>

              <!--Google map-->
              <div class="">
<div id="map-container-google-3 " class="z-depth-1-half map-container-3">
    <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
      style="border:0" allowfullscreen></iframe>
  </div>
</div>
            </div>
        </section>
        <!-- Footer-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
</x-app-layout>