@extends('layouts.app')
@section('content')

<div class="content-wrapper"><!--diri mag start ang copy-->
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
                            <h3 class="card-title text-lg"><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Update Vehicle Details</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="float-end">
                                    <a href="{{ route('vehicles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row">
                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="vehicleName" class="col-form-label">Name</label>
                                                        <input type="text" class="form-control @error('vehicleName') is-invalid @enderror" id="vehicleName" name="vehicleName" value="{{ $vehicle->vehicleName }}">
                                                        @if ($errors->has('vehicleName'))
                                                            <span class="text-danger">{{ $errors->first('vehicleName') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="plateNumber" class="col-form-label">Plate Number</label>
                                                        <input type="text" class="form-control @error('plateNumber') is-invalid @enderror" id="plateNumber" name="plateNumber" value="{{ $vehicle->plateNumber }}">
                                                        @if ($errors->has('plateNumber'))
                                                            <span class="text-danger">{{ $errors->first('plateNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="make" class="col-form-label">Make</label>
                                                        <input type="text" class="form-control @error('make') is-invalid @enderror" id="make" name="make" value="{{ $vehicle->make }}">
                                                        @if ($errors->has('make'))
                                                            <span class="text-danger">{{ $errors->first('make') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="series" class="col-form-label">Series</label>
                                                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ $vehicle->series }}">
                                                        @if ($errors->has('series'))
                                                            <span class="text-danger">{{ $errors->first('series') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="model" class="col-form-label">Model</label>
                                                        <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ $vehicle->model }}">
                                                        @if ($errors->has('model'))
                                                            <span class="text-danger">{{ $errors->first('model') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="bodyType" class="col-form-label">Body Type</label>
                                                        <input type="text" class="form-control @error('bodyType') is-invalid @enderror" id="bodyType" name="bodyType" value="{{ $vehicle->bodyType }}">
                                                        @if ($errors->has('bodyType'))
                                                            <span class="text-danger">{{ $errors->first('bodyType') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="yearModel" class="col-form-label">Year Model</label>
                                                        <input type="number" class="form-control @error('yearModel') is-invalid @enderror" id="yearModel" name="yearModel" value="{{ $vehicle->yearModel }}">
                                                        @if ($errors->has('yearModel'))
                                                            <span class="text-danger">{{ $errors->first('yearModel') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="engineNumber" class="col-form-label">Engine Number</label>
                                                        <input type="text" class="form-control @error('engineNumber') is-invalid @enderror" id="engineNumber" name="engineNumber" value="{{ $vehicle->engineNumber }}">
                                                        @if ($errors->has('engineNumber'))
                                                            <span class="text-danger">{{ $errors->first('engineNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="chassisNumber" class="col-form-label">Chassis Number</label>
                                                        <input type="text" class="form-control @error('chassisNumber') is-invalid @enderror" id="chassisNumber" name="chassisNumber" value="{{ $vehicle->chassisNumber }}">
                                                        @if ($errors->has('chassisNumber'))
                                                            <span class="text-danger">{{ $errors->first('chassisNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="purchaseDate" class="col-form-label">Purchased Date</label>
                                                        <input type="date" class="form-control @error('purchaseDate') is-invalid @enderror" id="purchaseDate" name="purchaseDate" value="{{ $vehicle->purchaseDate }}">
                                                        @if ($errors->has('purchaseDate'))
                                                            <span class="text-danger">{{ $errors->first('purchaseDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="registrationDate" class="col-form-label">Registration Date</label>
                                                        <input type="date" class="form-control @error('registrationDate') is-invalid @enderror" id="registrationDate" name="registrationDate" value="{{ $vehicle->registrationDate }}">
                                                        @if ($errors->has('registrationDate'))
                                                            <span class="text-danger">{{ $errors->first('registrationDate') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="purchaseCost" class="col-form-label">Purchased Cost</label>
                                                        <input type="text" class="form-control @error('purchaseCost') is-invalid @enderror" id="purchaseCost" name="purchaseCost" value="{{ $vehicle->purchaseCost }}">
                                                        @if ($errors->has('purchaseCost'))
                                                            <span class="text-danger">{{ $errors->first('purchaseCost') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="depreciationCost" class="col-form-label">Depreciation Cost</label>
                                                        <input type="text" class="form-control @error('depreciationCost') is-invalid @enderror" id="depreciationCost" name="depreciationCost" value="{{ $vehicle->depreciationCost }}">
                                                        @if ($errors->has('depreciationCost'))
                                                            <span class="text-danger">{{ $errors->first('depreciationCost') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="propertyNumber" class="col-form-label">Property Number</label>
                                                        <input type="text" class="form-control @error('propertyNumber') is-invalid @enderror" id="propertyNumber" name="propertyNumber" value="{{ $vehicle->propertyNumber }}">
                                                        @if ($errors->has('propertyNumber'))
                                                            <span class="text-danger">{{ $errors->first('propertyNumber') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Vehicle">
                                            </div>

                                        </form>
                                </div> <!-- /.card-body -->
                                    
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->
@endsection

