@extends('layouts.home')

@section('title')

    Withdraw Your Funds

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
                            <h2 class="box-title">Withdraw Funds into your wallet</h2>
                        </div>
                        @if(session('withdrawErr') != NULL)
                        <p class="alert alert-danger">{{ session('withdrawErr') }}</p>
                        @endif
                        @if(session('withdrawSuccess') != NULL)
                        <p class="alert alert-success">{{ session('withdrawSuccess') }}</p>
                        @endif
                        <!-- /.box-header -->
                        <form class="form" method="POST" action="{{route('withdraw.store')}}">
                            @csrf

                            <div class="box-body">
                                <h4 class="box-title">Choose Currency</h4>
                                <div class="demo-radio-button">
                                    @foreach($currencies as $key => $currency)
                                    <input name="currency" value={{ $currency->id }} type="radio" id="{{'radio_'.$key+7}}" required class="radio-col-primary" />
                                    <label for="{{'radio_'.$key+7}}" style="text-transform: uppercase">{{$currency->name}}</label>
                                    @endforeach
                                </div>
                            </div>

                            <div class="box-body">
                                <h4 class="box-title">Provide your crypto wallet</h4>
                                <div class="form-group">
                                    <label class="form-label mute">Make sure it is correct</label>
                                    <div class="form-group">
                                        <input name="wallet" type="text" placeholder="0x0000000000000000000000000000000000000000" class="form-control @error('wallet') is-invalid @enderror" required>
                                        @error('wallet')
                                        <div id="amountFeedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="box-body">
                                <h4 class="box-title">Input Amount</h4>
                                <div class="form-group">
                                    <label class="form-label mute">Min of $500</label>
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
                                    <i class="ti-save-alt"></i> Continue
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