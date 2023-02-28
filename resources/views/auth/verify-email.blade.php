@extends('layouts.guest')

    @section('title')
        Verify Email
    @endsection


    @section('content')
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="contact mt-5">
							<p>Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-info">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                            <form class="form" name="enq" method="post" action="{{ route('verification.send') }}">
                                @csrf
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

