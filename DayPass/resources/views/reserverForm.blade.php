<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daypass</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="">	
				<div class="container-fluid d-flex justify-content-center booking-cta">
						
					
							<h1> reservation  <span class="spn">{{ $daypass->label}} </span></h1>
					
					
					</div>
				<div class="row" style="margin-right:0px; margin-left:0px;">
				
					<div class="col-md-6 col-md-pull-7 container ">
						<div class="booking-form  ">
							<form action='{{route('reservation.StoreReservation',$daypass->slug)}}' method="post">
								@csrf
								<div class="form-group">
									<span class="form-label">votre CIN</span>
									<input class="form-control" type="text" placeholder="Entrer votre CIN" name="cin">
								</div>
                                <div class="form-group">
									<span class="form-label">votre Email</span>
									<input class="form-control" type="text" placeholder="Entrer votre Email" name="email">
								</div>
								<div class="row " >
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date d'entrer</span>
											<input class="form-control" type="date" name="date_entrer" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Date de sortie</span>
											<input class="form-control" type="date" name="date_sortie" required>
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Nombre de personnes </span>
											<select class="form-control" name="nombre_personne">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>+3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								
						    </div>



							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Les services </span>

								@if ($daypass->service1_price != null)
											<div>
												<input type="checkbox" id="service1" name="service1"    value="{{  $daypass->service1_price  }}"/>
												<label for="scales">{{$daypass->service1_price}}	</label>
											</div>
											@endif

								@if ($daypass->service2_price != null)
											
											
											<div>
												<input type="checkbox" id="service2" name="service2"  value="{{  $daypass->service2_price  }}" >
												<label for="scales">{{$daypass->service2_price}}	</label>
											</div>
											@endif

								@if ($daypass->service3_price != null)	
											<div>
												<input type="checkbox" id="service3" name="service3"   value="{{  $daypass->service3_price  }}">
												<label for="scales">{{$daypass->service3_price}}	</label>
											</div>
								@endif

								@if ($daypass->service4_price != null)
											<div>
												<input type="checkbox" id="service4" name="service4"  value="{{  $daypass->service4_price  }}" >
												<label for="scales">{{$daypass->service4_price}}	</label>
											</div>
						    	@endif
								
								</div>	
					       </div>

								<div class="form-btn">
									<input type="submit"  class="submit-btn" value="Valider" >
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
</x-app-layout> 