@extends('layouts.guest')

	@section('title')
		Sign In
	@endsection
	@section('content')
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact">
							<p>"Not investing in crypto is like leaving a good party early." - Naval Ravikant.</p>
							<form class="form" name="enq" method="post" action="{{route('register')}}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-6">
                                        <label for="first_name" class="form-label">Legal First Name</label>
										<input value="{{old('first_name')}}" id="first_name" type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="John" required="required">
                                        @error('first_name')
                                        <div style="margin-top: -30px;" id="first_nameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="form-label">Legal Last Name</label>
										<input value="{{old('last_name')}}" id="last_name" type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Doe" required="required">
                                        @error('last_name')
                                        <div style="margin-top: -30px;" id="last_nameFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
									<div class="form-group col-md-6">
                                        <label for="email" class="form-label">Your Email Address</label>
										<input value="{{old('email')}}" id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="john@doe.com" required="required">
                                        @error('email')
                                        <div style="margin-top: -30px;" id="emailFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
									<div class="form-group col-md-6">
                                        <label for="country" class="form-label">Country of Residence</label>
										<input value="{{old('country')}}" id="country" type="text" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="United States" required="required">
                                        @error('country')
                                        <div style="margin-top: -30px;" id="countryeFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="password" class="form-label">Password</label>
										<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="******" required="required">
                                        @error('password')
                                        <div style="margin-top: -30px;" id="passwordFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
									<div class="form-group col-md-6">
                                        <label for="password_confirm" class="form-label">Password Confirmation</label>
										<input type="password" id="password_confirm" name="password_confirmation" class="form-control" placeholder="********" required="required">
									</div>
                                    <div class="form-group col-md-12">
                                        <label for="address" class="form-label">Residencial Address(with postal code)</label>
										<input value="{{old('address')}}" id="address" type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="123 Main Street Anytown, USA 12345" required="required">
                                        @error('address')
                                        <div style="margin-top: -30px;" id="addresseFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Sign Up" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Secure Your Future!">Sign Up</button>
									</div>
									<div class="col-md-12 mt-3">
                                        <p style="text-align: right">
                                            Already Have an Account ? <a class="text-white" href="{{route('login')}}"> Sign In</a>
                                        </p>
                                    </div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->					
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CONTACT -->		
	@endsection