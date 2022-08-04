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
				<div class="row">
					{{-- <div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h3> reservation</h3>
						</div>
					</div> --}}
					<div class="col-md-6 col-md-pull-7">
						<div class="booking-form">
							<form>
								<div class="form-group">
									<span class="form-label">votre CIN</span>
									<input class="form-control" type="text" placeholder="Entrer votre CIN" name="cin">
								</div>
                                <div class="form-group">
									<span class="form-label">votre Email</span>
									<input class="form-control" type="text" placeholder="Entrer votre Email" name="email">
								</div>
								<div class="row">
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
												<input type="checkbox" id="scales" name="scales" >
												<label for="scales">{{$daypass->service1_price}}	</label>
											</div>
											@endif

								@if ($daypass->service2_price != null)
											
											
											<div>
												<input type="checkbox" id="scales" name="scales" >
												<label for="scales">{{$daypass->service2_price}}	</label>
											</div>
											@endif

								@if ($daypass->service3_price != null)	
											<div>
												<input type="checkbox" id="scales" name="scales" >
												<label for="scales">{{$daypass->service3_price}}	</label>
											</div>
								@endif

								@if ($daypass->service4_price != null)
											<div>
												<input type="checkbox" id="scales" name="scales" >
												<label for="scales">{{$daypass->service4_price}}	</label>
											</div>
						    	@endif
								
								</div>	
					       </div>

								<div class="form-btn">
									<button class="submit-btn">Valider </button>
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