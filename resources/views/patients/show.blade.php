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
                      <h1 class="text-lg"><b>Patient Transport Management</b></h1>
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
                        <h3 class="card-title text-lg"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Request Information</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <div class="float-end">
                                    <a href="{{ route('patients.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                                </div>
                          </div>

                      </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="requestDate" class="col-md-4 col-form-label text-md-end text-start"><strong>Request Date:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->name }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="travelDate" class="col-md-4 col-form-label text-md-end text-start"><strong>Travel Date:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->travelDate }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="timeDate" class="col-md-4 col-form-label text-md-end text-start"><strong>Time of Pick-up:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->timeDate }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="patientName" class="col-md-4 col-form-label text-md-end text-start"><strong>Patient's Name:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->patientName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="patientGender" class="col-md-4 col-form-label text-md-end text-start"><strong>Gender:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->patientGender }}
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="patientContact" class="col-md-4 col-form-label text-md-end text-start"><strong>Contact Number:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->patientContact }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="patientAddress" class="col-md-4 col-form-label text-md-end text-start"><strong>Complete Address:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->patientAddress }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="destination" class="col-md-4 col-form-label text-md-end text-start"><strong>Destination:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->destination }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="condition" class="col-md-4 col-form-label text-md-end text-start"><strong>Medical Condition:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->condition }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="reqStatus" class="col-md-4 col-form-label text-md-end text-start"><strong>Request Status:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $patient->reqStatus }}
                                    </div>
                                </div>

                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection

