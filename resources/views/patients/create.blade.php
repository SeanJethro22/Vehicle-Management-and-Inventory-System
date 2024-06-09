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
                            <div class="card-title m-1 text-lg">
                                <div class="image">
                                    <img src="{{asset('backend/dist/img/patient.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Add New Request
                                        </b>
                                </div>
                            </div>

                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('patients.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="requestDate" class="col-form-label">Request Date</label>
                                                        <input type="date" class="form-control @error('requestDate') is-invalid @enderror" id="requestDate" name="requestDate" value="{{ old('requestDate') }}" required>
                                                        @if ($errors->has('requestDate'))
                                                            <span class="text-danger">{{ $errors->first('requestDate') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="travelDate" class="col-form-label">Travel Date</label>
                                                        <input type="date" class="form-control @error('travelDate') is-invalid @enderror" id="travelDate" name="travelDate" value="{{ old('travelDate') }}" required>
                                                        @if ($errors->has('travelDate'))
                                                            <span class="text-danger">{{ $errors->first('travelDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="timeDate" class="col-form-label">Time</label>
                                                        <input type="time" class="form-control @error('timeDate') is-invalid @enderror" id="timeDate" name="timeDate" value="{{ old('timeDate') }}" required>
                                                        @if ($errors->has('timeDate'))
                                                            <span class="text-danger">{{ $errors->first('timeDate') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-7 mb-3 mb-sm-0">
                                                    <label for="patientName" class="col-form-label">Patient Full Name</label>
                                                        <input type="text" class="form-control @error('patientName') is-invalid @enderror" id="patientName" name="patientName" value="{{ old('patientName') }}" required>
                                                        @if ($errors->has('patientName'))
                                                            <span class="text-danger">{{ $errors->first('patientName') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="patientGender" class="col-form-label">Gender</label>
                                                        <select name="patientGender" id="patientGender" class="form-control @error('patientGender') is-invalid @enderror" value="{{ old('patientGender') }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                            @if ($errors->has('patientGender'))
                                                                <span class="text-danger">{{ $errors->first('patientGender') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="patientContact" class="col-form-label">Contact Number</label>
                                                        <input type="number" class="form-control @error('patientContact') is-invalid @enderror" id="patientContact" name="patientContact" value="{{ old('patientContact') }}" required>
                                                        @if ($errors->has('patientContact'))
                                                            <span class="text-danger">{{ $errors->first('patientContact') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="patientAddress" class="col-form-label">Address</label>
                                                        <input type="text" class="form-control @error('patientAddress') is-invalid @enderror" id="patientAddress" name="patientAddress" value="{{ old('patientAddress') }}" required>
                                                        @if ($errors->has('patientAddress'))
                                                            <span class="text-danger">{{ $errors->first('patientAddress') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="destination" class="col-form-label">Destination</label>
                                                        <input type="text" class="form-control @error('destination') is-invalid @enderror" id="destination" name="destination" value="{{ old('destination') }}" required>
                                                        @if ($errors->has('destination'))
                                                            <span class="text-danger">{{ $errors->first('destination') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="condition" class="col-form-label">Condition</label>
                                                        <input type="text" class="form-control @error('condition') is-invalid @enderror" id="condition" name="condition" value="{{ old('condition') }}" required>
                                                        @if ($errors->has('condition'))
                                                            <span class="text-danger">{{ $errors->first('condition') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="reqStatus" class="col-form-label">Request Status</label>
                                                        <select name="reqStatus" id="reqStatus" class="form-control @error('reqStatus') is-invalid @enderror" value="{{ old('reqStatus') }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Pending" class="text-warning">Pending</option>
                                                            <option value="Approved" class="text-success">Approved</option>
                                                            <option value="Cancelled" class="text-danger">Cancelled</option>
                                                        </select>
                                                            @if ($errors->has('reqStatus'))
                                                                <span class="text-danger">{{ $errors->first('reqStatus') }}</span>
                                                            @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="plateNumber" class="col-form-label">Assigned Vehicle</label>
                                                        <select name="plateNumber" id="plateNumber" class="form-control @error('plateNumber') is-invalid @enderror" 
                                                                value="{{ old('plateNumber') }}" 
                                                                {{ empty($vehicles) ? 'disabled' : '' }} required>

                                                            @if (!empty($vehicles)) 
                                                                @foreach ($vehicles as $vehicle)
                                                                    <option value="{{ $vehicle->id }}" class="text-warning">
                                                                        {{ $vehicle->name }} 
                                                                    </option>
                                                                @endforeach
                                                            @else
                                                                <option value="" disabled>No vehicles available</option> 
                                                            @endif
                                                        </select>
                                                            @if ($errors->has('plateNumber'))
                                                                <span class="text-danger">{{ $errors->first('plateNumber') }}</span>
                                                            @endif
                                                </div>
                                            
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Assigned Driver</label>
                                                        <select name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
                                                                value="{{ old('name') }}" 
                                                                {{ empty($drivers) ? 'disabled' : '' }} required>

                                                            @if (!empty($drivers)) 
                                                                @foreach ($drivers as $driver)
                                                                    <option value="{{ $driver->id }}" class="text-warning">
                                                                        {{ $driver->name }} 
                                                                    </option>
                                                                @endforeach
                                                            @else
                                                                <option value="" disabled>No drivers available</option> 
                                                            @endif
                                                        </select>
                                                            @if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Assigned Reponder</label>
                                                        <select name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
                                                                value="{{ old('name') }}" 
                                                                {{ empty($responders) ? 'disabled' : '' }} required>

                                                            @if (!empty($responders)) 
                                                                @foreach ($responders as $responder)
                                                                    <option value="{{ $responder->id }}" class="text-warning">
                                                                        {{ $responder->name }} 
                                                                    </option>
                                                                @endforeach
                                                            @else
                                                                <option value="" disabled>No responders available</option> 
                                                            @endif
                                                        </select>
                                                            @if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                            @endif
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <a href="{{ route('patients.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                                <button type="submit" class="btn btn-success btn-md">Save</button>
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
