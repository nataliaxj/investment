@extends('layouts.home')

@section('title')

Our Investment Plans

@endsection


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->	  
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Investmen Plans</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Investment</li>
                                <li class="breadcrumb-item active" aria-current="page">Plans</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row mt-50">
                @foreach($plans as $key => $plan)
                <div class="col-lg-4">
                    <div class="card card-pricing">
                        <div class="card-body text-center">
                            <h4 class="card-pricing-plan-name fw-500 text-uppercase">{{ $plan->name }}</h4>
                            <i class="card-pricing-icon fa fa-user text-primary bg-primary-light"></i>
                            <h2 class="card-pricing-price">${{ $plan->minimum_investment }} - ${{ $plan->maximum_investment }}</h2>
                            <ul class="card-pricing-features">
                                <li><i class="me-5 text-success fa fa-check"></i>{{ $plan->profit_daily }}% daily</li>
                                <li><i class="me-5 text-success fa fa-check"></i>{{ $plan->duration }} investment</li>
                                <li class="h5"><i class="me-5 text-success fa fa-check"></i>Total ROI {{ $plan->getTotalROI($plan->duration, $plan->profit_daily) }}%</li>
                                <li><i class="me-5 text-success fa fa-check"></i>Email Support</li>

                                @if($plan->id > 3)
                                <li><i class="me-5 text-success fa fa-check"></i>24x7 Support</li>
                                @else
                                <li><i class="me-5 text-gray fa fa-close"></i>24x7 Support</li>
                                @endif
                            </ul>
                            <a href="{{ route('invest') }}" class="btn btn-primary mt-4">Choose Plan</a>
                        </div>
                    </div> <!-- end Pricing_card -->
                </div> <!-- end col -->
                @endforeach
            </div>
            <!-- end row -->
        </section>
        <!-- /.content -->	  
        </div>
    </div>
<!-- /.content-wrapper -->
    
@endsection