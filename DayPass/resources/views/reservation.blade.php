<x-app-layout>

<!doctype html>
<html lang="en">
  <head>
  	<title>Daypass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
	


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
					{{-- <h2 class="heading-section">Mes reservations</h2> --}}
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
			
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
							  <th>status</th>
						      <th>CIN</th>
						      <th>Email</th>
						      <th>Date entrer</th>
						      <th>Date sortie</th>
						      <th>N° personnes </th>
						      <th>Services</th>
						      <th>status</th>
						    </tr>
						  </thead>
						  <tbody>


							@foreach ($reservation as $item)
						    <tr class="alert" role="alert">
								<td>
									<div class="col-2">  
										{{-- {{route('daypass.delete',$item->slug)}}  --}}
										<form id="{{$item->id}}" action="{{route('reservation.delete',$item->id)}}" method="POST">
											@csrf
											@method('DELETE')
										</form> 
										{{-- delete --}}
										<button type="submit" class="btn btn-outline-danger btn-sm"
											onclick="event.preventDefault();
											if(confirm('voulez vous annuler cette reservation ?'))
											document.getElementById({{$item->id}}).submit();">
											Annuler
										</button>
								  </div>

						    	</td>
								{{-- cin --}}
						    	<td>
						    		<label>
										{{$item->cin}}
									</label>
						    	</td>
								{{-- email --}}
						    	<td>
									<label> 	{{$item->email}}</label>
						    	</td>
                            {{-- date E --}}
						      <td>
									<label>	{{$item->date_entrer}}</label>
						      	
						      </td>
							  {{-- date sortie --}}
						      <td> 	{{$item->date_sortie}}</td>

						      <td class="quantity">
								{{$item->nombre_personne}}
				          </td>
				        
						      <td>
								{{$item->services}}
				        	</td>


							<td>
								@if (!auth()->user()->is_admin)
										@if ( $item->is_valid== '1')
										
											<label class="text-info" ><i class="bi bi-hourglass-bottom"></i>En attente</label>

										
										@endif


										@if ( $item->is_valid== '2')
										
											<label class="text-success" ><i class="bi bi-check-circle-fill"></i>Accepter</label>

										
										@endif
										@if ( $item->is_valid== '3')
										
											<label class="text-danger" ><i class="bi bi-exclamation-circle"></i>Refuser</label>

										
										@endif
								@else

                                    <form method="POST" action="{{route('reservation.status',$item ->id)}}">
										@csrf
								
                             <input type="hidden" value="{{$item ->id}}" name="id" >
							 {{-- {{old('$item->id')=='1' ?'checked' : ''}} --}}
								{{-- en attend --}}
								<input type="radio" id="b1" name="{{$item->id}}" value="1"  >
								<label for="accept"> En attent</label>
								{{-- acccept --}}
								<input type="radio" id="b2" name="{{$item->id}}" value="2">
								<label for="accept"> Accepter</label>
								{{-- refuser --}}
								<input type="radio" id="b3" name="{{$item->id}}" value="3">
								<label for="deny"> Refuser</label>
								<input type="submit" class='btn btn-light' value="save">
									</form>
								@endif
							</td>
						    </tr>
							
							@endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
</x-app-layout>