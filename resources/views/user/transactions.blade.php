@extends("layouts.home")

@section('title')

View Your Transactions

@endsection


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Transactions</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                                <li class="breadcrumb-item active" aria-current="page">transactions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

      <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Deposit Transactions</h5>
							<p class="mb-0 card-subtitle text-muted">All Your deposit transactions are displayed below</p>
						</div>						
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th style="width:40%;">Date</th>
										<th class="d-md-table-cell" style="width:25%">Currency</th>
										<th style="width:15%;">Amount</th>
                                        <th style="width:15%;">Status</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($deposits as $key => $deposit)
									<tr class="{{ $deposit->status == "Confirmed" ? "table-success" : "table-primary" }}">
										<td class="d-none d-md-table-cell text-fade">{{ \Carbon\Carbon::parse($deposit->created_at)->isoFormat('MMM Do YYYY') }}</td>
                                        <td style="text-transform: uppercase;">{{ $deposit->currency->name }}</td>
										<td class="table-action min-w-100">{{ number_format($deposit->amount, 2, '.', ',') }}</td>
                                        <td>{{ $deposit->status }}</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

                <div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Withdrawal Transactions</h5>
							<p class="mb-0 card-subtitle text-muted">All Your withdrawal transactions are displayed below.</p>
						</div>						
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th style="width:40%;">Date</th>
										<th class="d-md-table-cell" style="width:25%">Currency</th>
										<th style="width:15%;">Amount</th>
                                        <th style="width:15%;">Status</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($withdrawals as $key => $withdrawal)
									<tr class="{{ $withdrawal->status == "Confirmed" ? "table-success" : "table-primary" }}">
										<td class="d-none d-md-table-cell text-fade">{{ \Carbon\Carbon::parse($withdrawal->created_at)->isoFormat('MMM Do YYYY') }}</td>
                                        <td style="text-transform: uppercase;">{{ $withdrawal->currency->name }}</td>
										<td class="table-action min-w-100">{{ number_format($withdrawal->amount, 2, '.', ',') }}</td>
                                        <td>{{ $withdrawal->status }}</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>

                <div class="col-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Investment Transactions</h5>
							<p class="mb-0 card-subtitle text-muted">All Your investment transactions are displayed below.</p>
						</div>						
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th style="width:40%;">Date</th>
										<th class="d-md-table-cell" style="width:25%">Plan</th>
										<th style="width:15%;">Amount</th>
                                        <th style="width:15%;">Status</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($investments as $key => $investment)
									<tr class="table-success">
										<td class="d-none d-md-table-cell text-fade">{{ \Carbon\Carbon::parse($investment->created_at)->isoFormat('MMM Do YYYY') }}</td>
                                        <td style="text-transform: uppercase;">{{ $investment->plan->name }}</td>
										<td class="table-action min-w-100">{{ number_format($investment->amount, 2, '.', ',') }}</td>
                                        <td>{{ $investment->is_active ? "Active" : "Not Active" }}</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
          <!-- end row --> 
        </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

@endsection