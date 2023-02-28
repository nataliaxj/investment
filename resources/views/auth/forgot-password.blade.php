@extends('layouts.guest')

    @section('title')
        Reset Password
    @endsection


    @section('content')
        <section id="contact" class="contact_us section-padding mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                        <div class="contact mt-5">
                            <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                            @if(session('status') != null)
                            <div class="alert alert-info">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form class="form" name="enq" method="post" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="email" class="form-label">Your Email Address</label>
                                        <input value="{{old('email')}}" id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="john@doe.com" required="required">
                                        @error('email')
                                        <div style="margin: -30px 0px 0px 20px;" id="emailFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" value="Sign In" name="submit" id="submitButton" class="btn btn-lg contact_btn" title="Secure Your Future!">Reset Password</button>
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
