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
                            <h3 class="card-title text-lg"><i class="fa fa-car" aria-hidden="true"></i>&nbsp; Add New Driver</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="float-end">
                                    <a href="{{ route('drivers.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('drivers.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-sm-7 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Full Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="dob" class="col-form-label">Date of Birth</label>
                                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                                                        @if ($errors->has('dob'))
                                                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="age" class="col-form-label">Age</label>
                                                        <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" required>
                                                        @if ($errors->has('age'))
                                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                                        @endif
                                                </div>
                                            </div>                                          

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="address" class="col-form-label">Complete Address</label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                                                        @if ($errors->has('address'))
                                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="gender" class="col-form-label">Gender</label>
                                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ old('gender') }}" required>
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
                                                        <select name="civilStatus" id="civilStatus" class="form-control @error('civilStatus') is-invalid @enderror" value="{{ old('civilStatus') }}" required>
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
                                                        <input type="number" class="form-control @error('mobileNumber') is-invalid @enderror" id="mobileNumber" name="mobileNumber" value="{{ old('mobileNumber') }}">
                                                        @if ($errors->has('mobileNumber'))
                                                            <span class="text-danger">{{ $errors->first('mobileNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="employeeId" class="col-form-label">Employee ID</label>
                                                        <input type="number" class="form-control @error('employeeId') is-invalid @enderror" id="employeeId" name="employeeId" value="{{ old('employeeId') }}">
                                                        @if ($errors->has('employeeId'))
                                                            <span class="text-danger">{{ $errors->first('employeeId') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="designation" class="col-form-label">Designation</label>
                                                        <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation') }}">
                                                        @if ($errors->has('designation'))
                                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                                        @endif
                                                </div>
                                                
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="status" class="col-form-label">Status</label>
                                                        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}" required>
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
                                                        <select name="division" id="division" class="form-control @error('division') is-invalid @enderror" value="{{ old('division') }}" required>
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

                                            <div class="mb-3 row">
                                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Driver">
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
