@extends("layouts.home")

@section('title')

Your Investments

@endsection


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Investments</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Home</li>
                                    <li class="breadcrumb-item active" aria-current="page">investments</li>
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
                      <div class="card-body">
                          <div class="row mb-2">
                              <div class="col-xl-12 text-right">
                                  <div class="text-xl-end mt-xl-0 mt-2">
                                      <a href="{{ route('invest') }}" class="btn btn-primary mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Make New Investment</a>
                                      <button type="button" class="btn btn-primary-light mb-2">Export</button>
                                  </div>
                              </div><!-- end col-->
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped table-centered mb-0">
                                  <thead class="table-light text-fade">
                                      <tr class="text-dark">
                                          <th>Investment ID</th>
                                          <th>Date</th>
                                          <th>Payment Plan</th>
                                          <th>Payment Duration</th>
                                          <th>Investment Amount</th>
                                          <th>Investment Status</th>
                                          <th>Profit/day</th>
                                          <th>Total Profits Made</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                        @foreach($investments as $key => $investment)
                                        <tr>
                                            <td><a href="#" class="text-body fw-500">#IN{{$investment->id}}</a> </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($investment->created_at)->isoFormat('MMM Do YYYY') }} <small>{{ \Carbon\Carbon::parse($investment->created_at)->isoFormat('H:m A') }}</small>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{ $investment->plan->name }}</p>
                                            </td>
                                            <td>
                                                <p class="mb-0">{{ $investment->plan->duration }}</p>
                                            </td>
                                            <td>
                                                ${{ $investment->amount }}
                                            </td>
                                            <td>
                                                @if($investment->is_active)
                                                <p class="mb-0"><span class="badge badge-primary-light">Active</span></p>
                                                @else
                                                <p class="mb-0"><span class="badge badge-success-light">Ended</span></p>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $investment->plan->profit_daily }}%
                                            </td>
                                            <td>
                                                {{ $investment->getTotalProfits() }}
                                            </td>
                                        </tr>
                                        @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div> <!-- end card-body-->
                  </div> <!-- end card-->
              </div> <!-- end col -->
          </div>
          <!-- end row --> 
      </section>
      <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

@endsection