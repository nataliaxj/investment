@extends('layouts.home')

@section('title')

    Deposit Funds

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <!-- Main content -->
            <section class="invoice">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="float-end mt-3">
                            <h5 class="text-dark">Hello, {{ Auth::user()->name() }}</h5>
                            <p class="text-muted ">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                        </div>
                    </div><!-- end col -->
                    <div class="col-sm-4 offset-sm-2">
                        <div class="mt-3 float-sm-end">
                            <p class="text-fade"><span class="text-dark">Deposit Date: </sapn> &nbsp;&nbsp;&nbsp; Jan 17, 2021</p>
                            <p class="text-fade"><span class="text-dark">Deposit Status: </sapn> <span class="badge bg-info float-end">{{ $payment->status }}</span></p>
                            <p class="text-fade"><span class="text-dark">Deposit ID: </sapn> <span class="float-end">#000{{ $payment->id}}</span></p>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center mt-4">
                    <div class="col-md-4 col-sm-6">
                        @if(session('txHash') != NULL)
                        <div class="alert alert-info">
                            Transaction hash updated successfully. Transaction status changed to Processing. Final confirmation will be made by admin.
                        </div>
                        @endif
                        <img src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg?w=400&h=300&c=crop" alt="barcode-image" class="img-fluid me-2" /> 
                        <div class="mt-3 text-center">
                            <p id="address" class="font-weight-bolder"><strong>0xe640Ba693507323D7bd74dBaBE04549725de2B5a</strong></p>
                            <button data-clipboard-target="#address" class="btn btn-sm btn-info btn-inline btnCopy">copy</button> 
                        </div>     
                    </div> <!-- end col-->
                </div>    
                <!-- end row -->        

                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="text-fade table-bordered table mt-4">
                                <thead>
                                    <tr>
                                        <th class="text-dark">#</th>
                                        <th class="text-dark">Currency</th>
                                        <th class="text-dark">Amount (USD)</th>
                                        <th class="text-dark">Tax (USD)</th>
                                        <th class="text-end text-dark">Total (USD)</th>
                                        <th class="text-end text-dark">Amount to Send</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <span id="currencyName" class="text-dark text-uppercase">{{ $payment->currency->name }}</span> <br/>
                                    </td>
                                    <td id="usdAmount">{{ $payment->amount }}</td>
                                    <td>{{ "0.00" }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td id="totalCoin" class="text-end"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-sm-6 text-fade">
                        <div class="clearfix pt-3">
                            <h5 class="text-dark">Notes:</h5>
                            <small>
                                All accounts are to be paid within 7 days from receipt of
                                invoice. To be paid by cheque or credit card or direct payment
                                online. If account is not paid within 7 days the credits details
                                supplied as confirmation of work undertaken will be charged the
                                agreed quoted fee noted above.
                            </small>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

                <div class="d-print-none mt-4">
                    <div class="text-end">
                        @if($payment->status == "Pending")
                        <button data-bs-toggle="modal" data-bs-target="#login-modal" class="btn btn-primary">I have made payment</button>
                        @endif
                    </div>
                </div>   
                <!-- end buttons -->			
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->



    <!-- SignIn modal content -->
    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center mt-2 mb-4">
                        <a href="index.html" class="text-success">
                            <span><img src="{{asset('dash/images/logo-light-text3.png')}}" alt="" height="30"></span>
                        </a>
                    </div>

                    <form method="POST" action="{{route('payment.update', $payment->id)}}" class="ps-3 pe-3">
                        @csrf
                        <div class="mb-3">
                            <label for="txHash" class="form-label">Transaction Hash</label>
                            <input class="form-control" name="txHash" type="text" id="txHash" required="" placeholder="0x32ef2ce24ef5494ac7b2f4a2ad6c7055844ef276bf34547a5ae6587601370c2b">
                        </div>

                        <div class="mb-3 text-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection



@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.10/dist/clipboard.min.js"></script>

    <script>
        new ClipboardJS('.btnCopy');


        $(document).ready(function(){

            const currency = $('#currencyName').text();
            const amount = $('#usdAmount').text();
            const currencyIds = {
                btc: "bitcoin",
                eth: "ethereum",
                bnb: "binancecoin",
            }

            const data = fetchPrice(currencyIds[currency]).then(priceUsd => {
                const price = priceUsd[currencyIds[currency]].usd;
                const amount_int = parseFloat(amount)
                const currencyAmount = (amount_int / price).toFixed(3);
                $('#totalCoin').text(currencyAmount);
                console.log(currencyAmount, priceUsd, priceUsd[currencyIds[currency]].usd, parseFloat(amount))
            });

            console.log(currencyIds, currency, currencyIds[currency])

        })

        const fetchPrice = async (currency_id) => {
            const res = await fetch(`https://api.coingecko.com/api/v3/simple/price?ids=${currency_id}&vs_currencies=USD`);
            const data = await res.json();
            return data;
        }
    </script>
@endsection