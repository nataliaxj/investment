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
						<div class="contact mt-5">
							<p>"Not investing in crypto is like leaving a good party early." - Naval Ravikant.</p>
							@if(session('status') != null)
                            <div class="alert alert-info">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form class="form" name="enq" method="post" action="{{route('login')}}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-6">
                                        <label for="email" class="form-label">Your Email Address</label>
										<input value="{{old('email')}}" id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="john@doe.com" required="required">
                                        @error('email')
                                        <div style="margin: -30px 0px 0px 20px;" id="emailFeedback" class="invalid-feedback">
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
									<div class="col-md-12 text-center">
										<button type="submit" value="Sign In" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Secure Your Future!">Sign In</button>
									</div>
                                    <div class="col-md-12 mt-3">
                                        <p style="text-align: right">
                                            Not Registered ? <a class="text-white" href="{{route('register')}}"> Sign Up</a>
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <p style="text-align: right">
                                            Forgot Password ? <a class="text-white" href="{{route('password.request')}}"> Reset</a>
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