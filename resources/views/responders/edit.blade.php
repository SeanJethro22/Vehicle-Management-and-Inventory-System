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
                      <h1 class="text-lg"><b>Responder Management</b></h1>
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
                                    <img src="{{asset('backend/dist/img/responder.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Update Responder
                                        </b>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('responders.update', $responder->id) }}" method="post">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row">
                                                <div class="col-sm-7 mb-3 mb-sm-0">
                                                    <label for="responderName" class="col-form-label">Full Name</label>
                                                        <input type="text" class="form-control @error('responderName') is-invalid @enderror" id="responderName" name="responderName" value="{{ $responder->responderName }}" required>
                                                        @if ($errors->has('responderName'))
                                                            <span class="text-danger">{{ $errors->first('responderName') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="dob" class="col-form-label">Date of Birth</label>
                                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ $responder->dob }}" required>
                                                        @if ($errors->has('dob'))
                                                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="age" class="col-form-label">Age</label>
                                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ $responder->age }}" required>
                                                        @if ($errors->has('age'))
                                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="address" class="col-form-label">Complete Address</label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ $responder->address }}" required>
                                                        @if ($errors->has('address'))
                                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="gender" class="col-form-label">Gender</label>
                                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ $responder->gender }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                            @if ($errors->has('gender'))
                                                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                            @endif
                                                </div>
         
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="civilStatus" class="col-form-label">Civil Status</label>
                                                        <select name="civilStatus" id="civilStatus" class="form-control @error('civilStatus') is-invalid @enderror" value="{{ $responder->civilStatus }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Seperated">Seperated</option>
                                                            <option value="Widowed">Widowed</option>
                                                        </select>
                                                            @if ($errors->has('civilStatus'))
                                                                <span class="text-danger">{{ $errors->first('civilStatus') }}</span>
                                                            @endif
                                                </div>
                                            
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="mobileNumber" class="col-form-label">Mobile Number</label>
                                                        <input type="number" class="form-control @error('mobileNumber') is-invalid @enderror" id="mobileNumber" name="mobileNumber" value="{{ $responder->mobileNumber }}" required>
                                                        @if ($errors->has('mobileNumber'))
                                                            <span class="text-danger">{{ $errors->first('mobileNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="employeeId" class="col-form-label">Employee ID</label>
                                                        <input type="number" class="form-control @error('employeeId') is-invalid @enderror" id="employeeId" name="employeeId" value="{{ $responder->employeeId }}" required>
                                                        @if ($errors->has('employeeId'))
                                                            <span class="text-danger">{{ $errors->first('employeeId') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="position" class="col-form-label">Designation</label>
                                                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ $responder->position }}">
                                                        @if ($errors->has('position'))
                                                            <span class="text-danger">{{ $errors->first('position') }}</span>
                                                        @endif
                                                </div>
                                                
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="status" class="col-form-label">Status</label>
                                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ $responder->status }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Permanent">Permanent</option>
                                                            <option value="Casual">Casual</option>
                                                            <option value="Job Order">Job Order</option>
                                                            <option value="Contract of Service">Contract of Service</option>
                                                        </select>
                                                            @if ($errors->has('status'))
                                                                <span class="text-danger">{{ $errors->first('status') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="division" class="col-form-label">Division</label>
                                                        <select name="division" id="division" class="form-control @error('division') is-invalid @enderror" value="{{ $responder->division }}" required>
                                                            <option selected>--Select--</option>
                                                                <option value="Administrative Support Services">Administrative Support Services</option>
                                                                <option value="Operations and Warning Services">Operations and Warning Services</option>
                                                                <option value="Administration and Training Services">Administration and Training Services</option>
                                                                <option value="Planning and Training Services">Planning and Research Services</option>
                                                        </select>
                                                            @if ($errors->has('division'))
                                                                <span class="text-danger">{{ $errors->first('division') }}</span>
                                                            @endif
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <a href="{{ route('responders.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                                <button type="submit" class="btn btn-success btn-md">Update</button>
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
