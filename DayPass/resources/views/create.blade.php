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
  

<div class="row">
  
   <div class="card col-md-12 m-2" >
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
            <h5 class="card-title">poster une publication</h5>

        </div>
        {{--  --}}
            <div class="card-body">
              <form action='{{route('daypass.store')}}' method="post" enctype="multipart/form-data">
                @csrf
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hotel</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom de l'hotel" name="label">
                </div> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">lieux</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="lieux de l'hotel" name="lieux">
                  </div> 
               <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">image</label>
                  <input type="file" class="form-control" id="exampleFormControlInput1" name="image">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">les services avec les prix</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="service_price"></textarea>
                  </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success" >
                  </div>
  
               </form>
            </div>
    </div>
  </div>
  
 </body>
 </html>
