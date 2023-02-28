@extends('layouts.home')

@section('title')

    Deposit Funds

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center" style="margin: 265px 0px 0px 0px">
                <div class="col-sm-6">
					<div class="card card-body">
						<h5 class="card-title fw-600 text-center">Start Your Investment Journey Today</h5>
						<p class="card-text text-gray-600 text-center">Make Your first deposit to continue</p>
                            <a href="{{route('deposit')}}" class="waves-effect waves-light btn w-p100 btn-success mb-5 mt-3">Invest Now <i class="ms-15 fa fa-angle-right"></i></a>
					</div> <!-- end card-->
				</div> <!-- end col-->
            </div>			
        </section>
        <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection