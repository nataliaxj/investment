@extends("layouts.home")

@section('title')

Make Your Investment

@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center" style="margin: 150px 0px 0px 0px">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Invest Your Funds</h4>
                        </div>
                        @if(session('amountError') != NULL)
                        <p class="alert alert-danger">{{ session('amountError') }}</p>
                        @endif
                        <!-- /.box-header -->
                        <form class="form" method="POST" action="{{route('invest.store')}}">
                            @csrf
                            <div class="box-body">
                                <div class="form-group mt-3">
                                    <label class="form-label">Investment Plan</label>
                                    <select name="plan" class="form-select text-uppercase" required>
                                        <option value="{{NULL}}">Choose Investment Plan</option>
                                        @foreach($plans as $plan)
                                        <option class="text-uppercase" value="{{$plan->id}}">{{$plan->name}} - ({{ "$".$plan->minimum_investment." - $".$plan->maximum_investment }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr class="my-15">
                                <div class="form-group">
                                    <label class="form-label">Amount (min of $500)</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input name="amount" min="500" type="number" placeholder="Amount" class="form-control @error('amount') is-invalid @enderror" required>
                                        <span class="input-group-addon">.00</i></span>
                                        @error('amount')
                                    <div id="amountFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Start Earning Now
                                </button>
                            </div>  
                        </form>
                    </div>
                    <!-- /.box -->			
                    </div>
                </div>

            </section>
        <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection