<x-app-layout>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daypass</title>
 </head>
 <body>
  

<div class="row d-flex justify-content-center">
  
   <div class="card col-12 col-md-6 mt-5" >
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
         @endif
    
        <div class="card-title">
            <h4 class="card-title m-5">Modifier  {{$daypass->label}}</h4>

        </div>
        {{--  --}}
            <div class="card-body">
              <form action='{{route('daypass.update',$daypass->slug)}}' method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hotel</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom de l'hotel" name="label" value="{{$daypass->label}}">
                </div> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">lieux</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="lieux de l'hotel" name="lieux" value="{{$daypass->lieux}}">
                  </div> 
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">image</label>
                  <input type="file" class="form-control" id="exampleFormControlInput1" name="image">
                </div>
           
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">les services avec les prix</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Service 1" name="service1_price" value="{{$daypass->service1_price}}">
                 </div>
                 <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">les services avec les prix</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Service 2" name="service2_price" value="{{$daypass->service2_price}}">
               </div>
               <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">les services avec les prix</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Service 3" name="service3_price" value="{{$daypass->service3_price}}">
             </div>
             <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">les services avec les prix</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Service 4" name="service4_price" value="{{$daypass->service4_price}}">
           </div>



                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$daypass->description}}</textarea>
                </div>
                <div class="mb-3">
                  <input type="submit" value="Valider la modification" class="btn text-light"  style="background-color:#EF5350 ">
                </div>
  
               </form>
            </div>
    </div>
  </div>
  
 </body>
 </html>
</x-app-layout> 