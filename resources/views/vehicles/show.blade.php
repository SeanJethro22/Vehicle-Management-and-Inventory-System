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
                      <h1 class="text-lg"><b>Vehicle Management</b></h1>
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
                                            Vehicle Information
                                        </b>
                                </div>
                            </div>

                      </div>
                        <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="vehicleName" class="col-md-4 col-form-label text-md-end text-start"><strong>Vehicle Name:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->vehicleName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="plateNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Plate #:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->plateNumber }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="make" class="col-md-4 col-form-label text-md-end text-start"><strong>Make:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->make }}
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="series" class="col-md-4 col-form-label text-md-end text-start"><strong>Series:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->series }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="model" class="col-md-4 col-form-label text-md-end text-start"><strong>Model:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->model }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="bodyType" class="col-md-4 col-form-label text-md-end text-start"><strong>Body Type:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->bodyType }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="yearModel" class="col-md-4 col-form-label text-md-end text-start"><strong>Year Model:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->yearModel }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="engineNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Engine Number:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->engineNumber }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="chassisNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Chassis Number:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->chassisNumber }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="purchaseDate" class="col-md-4 col-form-label text-md-end text-start"><strong>Purchased Date:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->purchaseDate }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="registrationDate" class="col-md-4 col-form-label text-md-end text-start"><strong>Registration Date:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->registrationDate }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="purchaseCost" class="col-md-4 col-form-label text-md-end text-start"><strong>Purchased Cost:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->purchaseCost }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="depreciationCost" class="col-md-4 col-form-label text-md-end text-start"><strong>Depreciation Cost:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->depreciationCost }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="propertyNumber" class="col-md-4 col-form-label text-md-end text-start"><strong>Propety Numbers:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $vehicle->propertyNumber }}
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                        <a href="{{ route('vehicles.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>

                                </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection

