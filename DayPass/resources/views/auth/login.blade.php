<!doctype html>
<html lang="en">
  <head>
  	<title>Daypass</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
        <x-guest-layout>
  

                
        <x-slot name="logo">
        
        </x-slot>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-3 text-center mb-5">
					<!-- <h2 class="heading-section">Login #0</h2> -->
					
					<img src="images/logo.png" alt="Daypass" class="w-50" >
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Connexion</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
                      <h1 name="logo">
                        
        <x-jet-validation-errors class="mb-4" />
                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                      </h1>
            
                
            
                   
            

                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- email  --}}
			      		<div class="form-group mt-3">

                            <label for="email" value="{{ __('Email') }}"> Email</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
			      			{{-- <input type="text"   :value="old('email')"   required>
			      			<label class="form-control-placeholder" for="username" value="{{ __('Email') }}" >Email</label> --}}
			      		</div>
                        {{-- password  --}}
		            <div class="form-group">

                        <label for="password" value="{{ __('Mot de passe') }}" > Mot de passe </label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />

		              {{-- <input id="password"  type="password" name="password" required autocomplete="current-password">
		              <label class="form-control-placeholder" for="password" value="{{ __('Mot de passe') }}"></label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">    {{ __('Log in') }}</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0" id="remember_me" name="remember" >Se souvenir de moi
									  <input type="checkbox" checked>
									  <span  id="remember_me" class="checkmark"></span>
										</label>
									</div>
								
		            </div>
                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublier?') }}
                            </a>
                        @endif
        
                    
                    </div>


		          </form>
		          <p class="text-center">Pas un membre? <a data-toggle="tab" href="/register">Inscrivez-vous</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

</x-guest-layout>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

{{-- _________________________________________________________________________ --}}
