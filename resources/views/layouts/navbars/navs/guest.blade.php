<div class="container">
	<div class="header">
		<div class="head-t">
			<div class=" logo col-5" >
			<a href="{{ route('index') }}"><img src="{{ asset('gretong') }}/images/itlogo.png" class="img-fluid" alt="..."/> </a>
			</div>
			<!-- start header_right -->
			<div class="header_right">
				<div class="rgt-bottom">
					<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
								<form role="form" method="POST" action="{{ route('login') }}" id="loginForm">
									                            @csrf

						                <fieldset id="body">
						                	<fieldset>
												<label for="email">Email Address</label>
                            					<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
													<input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}"  required autofocus>
													@if ($errors->has('email'))
													<span class="invalid-feedback" style="display: block;" role="alert">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
													@endif
												</div>
						                    </fieldset>
						                    <fieldset>
													<label for="password">Password</label>
													<div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
														<input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" required>
											            @if ($errors->has('password'))
															<span class="invalid-feedback" style="display: block;" role="alert">
																<strong>{{ $errors->first('password') }}</strong>
															</span>
														@endif
													</div>
												</fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
										</fieldset>
										
												<span>@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}" class="text-light">
											<small>{{ __('Forgot password?') }}</small>
										</a>
									@endif</span>
								</form>
							</div>
						</div>
					</div>
				</div>
					
				<div class="reg">
					<a class="text-muted" href="{{ route('register') }}">S'inscrire</a>
				</div>
				<div class="create_btn">
					<a href="{{ route('contact') }}">Nous Contacter</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- start header menu -->
		
	</div>
</div>
