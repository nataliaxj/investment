@extends('layouts.home')


@section('title')
    Dashboard
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-9 col-12">
                    <div class="box">
                        <div class="box-body pb-lg-0">
                            <div class="row">
                                <div class="col-lg-3 col-12 be-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-fade">Index</p>
                                        <p class="mb-0 text-success">6210</p>
                                    </div>
                                    <div>
                                        <h1 class="mb-0 fw-600">00,000.00 <small class="ms-10 me-5"><i class="text-success fa fa-caret-up"></i> 0.00%</small></h1>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-12">
                                    <div class="ms-lg-20 mt-20 mt-lg-0 d-flex justify-content-between align-items-center">
                                        <div>
                                            <p class="mb-0 text-fade">Your investment</p>
                                            <h2 class="mb-0 fw-600">$0,000</h2>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-fade">Current Value</p>
                                            <h2 class="mb-0 fw-600 text-success">$00,000</h2>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-fade">ROI</p>
                                            <h2 class="mb-0 fw-600 text-success">+00.0%</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-lg-7 col-12">
                                    <h3 class="box-title">Investment Growth</h3>
                                    <div id="investment-chart"></div>
                                </div>
                                <div class="col-lg-5 col-12">
                                    <h3 class="box-title">Your Portfolio</h3>
                                    <div class="d-flex justify-content-start align-items-center mt-md-20 mt-0">
                                        <div id="portfolio-chart"></div>
                                        <ul class="list-unstyled" style="margin-left: -21px;">
                                            <li><span class="badge badge-primary badge-dot me-10"></span> Large Cap Funds</li>
                                            <li><span class="badge badge-info badge-dot me-10"></span> Diversified Funds</li>
                                            <li><span class="badge badge-success badge-dot me-10"></span> Debt Funds</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($plans as $plan)
                    <div class="box pull-up">
                        <div class="box-body">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div>
                                    <p><span class="text-primary">Crypto</span> | <span class="text-fade">Trading</span></p>
                                    <h3 class="mb-0 fw-500">{{ $plan->name }}</h3>
                                </div>
                                <div class="mt-10 mt-md-0">
                                    <a href="{{ route('invest') }}" class="waves-effect waves-light btn btn-outline btn-primary">Invest Now</a>
                                </div>
                            </div>
                            <hr>
                            <div class="d-md-flex justify-content-between align-items-center">								
                                <div class="d-flex justify-content-start align-items-center">
                                    <div class="min-w-100">
                                        <p class="mb-0 text-fade">Fund Size</p>
                                        <h6 class="mb-0">{{ "$".$plan->minimum_investment." - $".$plan->maximum_investment }}</h6>
                                    </div>
                                    <div class="mx-lg-50 mx-20 min-w-70">
                                        <p class="mb-0 text-fade">Return On Investment(ROI)</p>
                                        <h6 class="mb-0 text-success">{{ $plan->profit_daily }}% in {{ $plan->duration }}</h6>
                                    </div>
                                    <div>
                                        <p class="mb-0 text-fade">Risk</p>
                                        <h6 class="mb-0">Save</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                    @endforeach							
                </div>
                <div class="col-xl-3 col-12">
                    <div class="mb-20">
                        <a href="{{ route('invest') }}" class="waves-effect waves-light btn w-p100 btn-success mb-5">Invest Now <i class="ms-15 fa fa-angle-right"></i></a>
                    </div>
                    <div class="box bg-transparent no-shadow">
                        <div class="box-header ps-0 pb-0">
                            <h3 class="box-title no-border">
                                Upcoming SIP
                            </h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <p class="mb-15">25 Dec 2021</p>
                            <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                                <div class="" style="width: 50px;    margin-right: 13px;">
                                    <img src="{{('dash/images/logo/logo-1.jpg')}}" class="avatar b-1" alt="" />
                                </div>
                                <div class="text-overflow" style="margin-left: 5px;">
                                    <a href="#">
                                        <p class="mb-0 fw-500 text-overflow">Prudential FMCG Fund - Growth</p>
                                        <p class="mb-0 fw-500">$500</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{('dash/images/logo/logo-2.jpg')}}" class="avatar b-1" alt="" />
                                </div>
                                <div class="text-overflow" style="margin-left: 5px;">
                                    <a href="#">
                                        <p class="mb-0 fw-500 text-overflow">Market Fund Direct-Growth</p>
                                        <p class="mb-0 fw-500">$500</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10 modal-1">
                                    <img src="{{('dash/images/logo/logo-3.jpg')}}" class="avatar b-1" alt="" />
                                </div>
                                <div class="text-overflow overflow_box">
                                    <a href="#">
                                        <p class="mb-0 fw-500 text-overflow">ABCD Money Market Fund Direct Plan-Growth</p>
                                        <p class="mb-0 fw-500">$500</p>
                                    </a>
                                </div>
                            </div>
                            <p class="mb-15">01 Jan 2022</p>
                            <div class="d-flex pb-15 mb-15 bb-1 bb-dashed">
                                <div class="me-10 modal-1 ">
                                    <img src="{{('dash/images/logo/logo-4.jpg')}}" class="avatar b-1" alt="" />
                                </div>
                                <div class="text-overflow overflow_box">
                                    <a href="#">
                                        <p class="mb-0 fw-500 text-overflow">A&D Money Market Fund Direct-Growth</p>
                                        <p class="mb-0 fw-500">$500</p>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-10" style="width: 50px;">
                                    <img src="{{('dash/images/logo/logo-5.jpg')}}" class="avatar b-1" alt="" />
                                </div>
                                <div class="text-overflow" style="margin-left: 5px;">
                                    <a href="#">
                                        <p class="mb-0 fw-500 text-overflow">Index Sensex Direct</p>
                                        <p class="mb-0 fw-500">$500</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="box bg-transparent no-shadow">
                        <div class="box-header ps-0 pb-0">
                            <h3 class="box-title no-border">
                                Best funds to buy
                            </h3>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body funds_1">
                            <div class="fund-scorll">
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10" style="width: 50px;">
                                        <img src="{{asset('dash/images/logo/logo-1.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10" style="width: 50px;">
                                        <img src="{{asset('dash/images/logo/logo-2.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10 modal-1">
                                        <img src="{{asset('dash/images/logo/logo-3.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500 overflow_box_1" >ABCD Money Market Fund Direct Plan-Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10 modal-1">
                                        <img src="{{asset('dash/images/logo/logo-4.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500 overflow_box_1">A&D Money Market Fund Direct-Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10" style="width: 50px;">
                                        <img src="{{asset('dash/images/logo/logo-1.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500">Prudential FMCG Fund - Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center pb-15 mb-15 bb-1 bb-dashed">
                                    <div class="me-10" style="width: 50px;">
                                        <img src="{{asset('dash/images/logo/logo-2.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500">Market Fund Direct-Growth</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="me-10" style="width: 50px;">
                                        <img src="{{asset('dash/images/logo/logo-5.jpg')}}" class="avatar b-1" alt="" />
                                    </div>
                                    <div>
                                        <a href="#">
                                            <p class="mb-0 fw-500">Index Sensex Direct</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>			
        </section>
        <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->


@endsection
