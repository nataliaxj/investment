@extends('layouts.guest')

    @section('title')
        Confirm Password
    @endsection


    @section('content')
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact mt-5">
							<p> This is a secure area of the application. Please confirm your password before continuing. </p>
                            <form class="form" name="enq" method="post" action="{{ route('password.confirm') }}">
                                @csrf
                                <div class="form-group col-md-12">
                                    <label for="password" class="form-label">Enter Password</label>
                                    <input type="password" autocomplete="current-password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required="required">
                                    @error('password')
                                    <div style="margin-top: -30px;" id="passwordFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
								<div class="row">
									<div class="col-md-12 text-center">
										<button type="submit" value="Resend Verification Email" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Resend Verification Email">Resend Verification Email</button>
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
