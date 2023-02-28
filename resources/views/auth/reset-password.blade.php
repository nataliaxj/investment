@extends('layouts.guest')

    @section('title')
        Reset Password
    @endsection


    @section('content')
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact mt-5">
							<p>Choose a new password for your account</p>
                            @if(session('status') != null)
                            <div class="alert alert-info">
                                {{ session('status') }}
                            </div>
                            @endif
							<form class="form" name="enq" method="post" action="{{ route('password.store') }}">
                                @csrf
								<div class="row">
									<div class="form-group col-md-12">
                                        <input name="token" type="hidden" value="{{ $request->token }}" />
										<input value="{{ $request->email }}" id="email" type="hidden" name="email" class="form-control @error('email') is-invalid @enderror" required="required">
                                        @error('email')
                                        <div style="margin: -30px 0px 0px 20px;" id="emailFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="password" class="form-label">New Password</label>
										<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="******" required="required">
                                        @error('password')
                                        <div style="margin-top: -30px;" id="passwordFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
									</div>
                                    <div class="form-group col-md-6">
                                        <label for="password_confirm" class="form-label">New Password Confirmation</label>
										<input type="password" id="password_confirm" name="password_confirmation" class="form-control" placeholder="********" required="required">
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Sign In" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Secure Your Future!">Sign In</button>
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
