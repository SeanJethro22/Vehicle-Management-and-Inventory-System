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
                      <h1 class="text-lg"><b>Driver Management</b></h1>
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
                                    <img src="{{asset('backend/dist/img/car.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Driver Information
                                        </b>
                                </div>
                            </div>

                      </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="driverName" class="col-md-4 col-form-label text-md-end text-start"><strong>Driver Name:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->driverName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-end text-start"><strong>Date of Birth:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->dob }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="age" class="col-md-4 col-form-label text-md-end text-start"><strong>Age:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->age }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="address" class="col-md-4 col-form-label text-md-end text-start"><strong>Complete Address:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->address }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-end text-start"><strong>Gender:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->gender }}
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="civilStatus" class="col-md-4 col-form-label text-md-end text-start"><strong>Civil Status:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->civilStatus }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="mobileNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Mobile Number:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->mobileNumber }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="employeeId" class="col-md-4 col-form-label text-md-end text-start"><strong>Employee ID:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->employeeId }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="designation" class="col-md-4 col-form-label text-md-end text-start"><strong>Designation:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->designation }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="status" class="col-md-4 col-form-label text-md-end text-start"><strong>Status:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->status }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="division" class="col-md-4 col-form-label text-md-end text-start"><strong>Division:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $driver->division }}
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                        <a href="{{ route('drivers.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>

                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection

