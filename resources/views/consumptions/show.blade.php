@extends('layouts.app')

@section('content')
<div class="content-wrapper">
        @session('success')
            <div class="alert alert-success" role="alert">
                {{ $value }}
            </div>
        @endsession
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="text-lg"><b>Fuel Request Management</b></h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section><!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                            <div class="card-title m-1 text-lg">
                                <div class="image">
                                    <img src="{{asset('backend/dist/img/patient.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Fuel Request Information
                                        </b>
                                </div>                                
                            </div>
                            <div class="text-right">
                                  <a href="#" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-print"></i> Generate Trip Ticket</a>
                                  <a href="#" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-print"></i> Generate Travel Order</a>
                            </div>

                      </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="date" class="col-md-4 col-form-label text-md-end text-start"><strong>Request Date:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->date }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="driverName" class="col-md-4 col-form-label text-md-end text-start"><strong>Driver:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->driverName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="plateNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Vehicle:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->plateNumber }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="passengerName" class="col-md-4 col-form-label text-md-end text-start"><strong>Passenger:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->passengerName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="destination" class="col-md-4 col-form-label text-md-end text-start"><strong>Destination:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->destination }}
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="purpose" class="col-md-4 col-form-label text-md-end text-start"><strong>Purpose:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->purpose }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="km_start" class="col-md-4 col-form-label text-md-end text-start"><strong>Kilometer Start:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->km_start }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="km_end" class="col-md-4 col-form-label text-md-end text-start"><strong>Kilometer End:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->km_end }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="dist_trav" class="col-md-4 col-form-label text-md-end text-start"><strong>Distance Travelled:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->dist_trav }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="td1" class="col-md-4 col-form-label text-md-end text-start"><strong>Time of Departure from Office:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->td1 }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="ta1" class="col-md-4 col-form-label text-md-end text-start"><strong>Time of arrival at the Destination:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->ta1 }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="td2" class="col-md-4 col-form-label text-md-end text-start"><strong>Time of Departure from Destination:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->td2 }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="ta2" class="col-md-4 col-form-label text-md-end text-start"><strong>Time of Arrival at the office:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->ta2 }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="bal_start" class="col-md-4 col-form-label text-md-end text-start"><strong>Balance Start:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->bal_start }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="issued" class="col-md-4 col-form-label text-md-end text-start"><strong>Issued fuel during trip:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->issued }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="added" class="col-md-4 col-form-label text-md-end text-start"><strong>Added fuel from Office:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->added }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="total" class="col-md-4 col-form-label text-md-end text-start"><strong>Total Fuel:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->total }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="fuel_cons" class="col-md-4 col-form-label text-md-end text-start"><strong>Total Fuel Consumed:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->fuel_cons }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="bal_end" class="col-md-4 col-form-label text-md-end text-start"><strong>Balance End:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $consumption->bal_end }}
                                    </div>
                                </div>

                                

                                <div class="card-footer text-right">
                                        <a href="{{ route('patients.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>

                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection


