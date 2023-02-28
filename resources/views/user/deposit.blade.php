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
            <div class="row justify-content-center" style="margin: 150px 0px 0px 0px">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Deposit Funds into your wallet</h4>
                        </div>
                        @if(session('pending_payment') != NULL)
                        <p class="alert alert-danger">{{ session('pending_payment') }}</p>
                        @endif
                        <!-- /.box-header -->
                        <form class="form" method="POST" action="{{route('deposit.store')}}">
                            @csrf
                            <div class="box-body">
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
                                <div class="form-group mt-3">
                                    <label class="form-label">Currency</label>
                                    <select name="currency" class="form-select text-uppercase" required>
                                        <option value="{{NULL}}">Choose Currency</option>
                                        @foreach($currencies as $currency)
                                        <option class="text-uppercase" value="{{$currency->id}}">{{$currency->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Proceed to Payment
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