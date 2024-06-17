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
                      <h1 class="text-lg"><b>Supplier Management</b></h1>
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
                                    <img src="{{asset('backend/dist/img/supplier.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Add New Supplier
                                        </b>
                                </div>
                            </div>

                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('suppliers.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="supplierName" class="col-form-label">Supplier Name</label>
                                                        <input type="text" class="form-control @error('supplierName') is-invalid @enderror" id="supplierName" name="supplierName" value="{{ old('supplierName') }}" required>
                                                        @if ($errors->has('supplierName'))
                                                            <span class="text-danger">{{ $errors->first('supplierName') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="contactPerson" class="col-form-label">Contact Person</label>
                                                        <input type="text" class="form-control @error('contactPerson') is-invalid @enderror" id="contactPerson" name="contactPerson" value="{{ old('contactPerson') }}" required>
                                                        @if ($errors->has('contactPerson'))
                                                            <span class="text-danger">{{ $errors->first('contactPerson') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="designation" class="col-form-label">Designation</label>
                                                        <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation') }}" required>
                                                        @if ($errors->has('designation'))
                                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                                        @endif
                                                </div>
                   
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="contact" class="col-form-label">Contact Number</label>
                                                        <input type="number" class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact') }}" required>
                                                        @if ($errors->has('contact'))
                                                            <span class="text-danger">{{ $errors->first('contact') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-7 mb-3 mb-sm-0">
                                                    <label for="address" class="col-form-label">Address</label>
                                                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" required>
                                                        @if ($errors->has('address'))
                                                            <span class="text-danger">{{ $errors->first('address') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="emailAddress" class="col-form-label">Email Address</label>
                                                        <input type="email" class="form-control @error('emailAddress') is-invalid @enderror" id="emailAddress" name="emailAddress" value="{{ old('emailAddress') }}" required>
                                                        @if ($errors->has('emailAddress'))
                                                            <span class="text-danger">{{ $errors->first('emailAddress') }}</span>
                                                        @endif
                                                </div>
                   
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="yearEst" class="col-form-label">Year Established</label>
                                                        <input type="year" class="form-control @error('yearEst') is-invalid @enderror" id="yearEst" name="yearEst" value="{{ old('yearEst') }}" required>
                                                        @if ($errors->has('yearEst'))
                                                            <span class="text-danger">{{ $errors->first('yearEst') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">                                             
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="philgepsMembership" class="col-form-label">PhilGEPS Membership</label>
                                                        <select name="philgepsMembership" id="philgepsMembership" class="form-control @error('philgepsMembership') is-invalid @enderror" value="{{ old('philgepsMembership') }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Platinum" class="text-secondary">Platinum</option>
                                                            <option value="Red" class="text-danger">Red</option>
                                                        </select>
                                                            @if ($errors->has('philgepsMembership'))
                                                                <span class="text-danger">{{ $errors->first('philgepsMembership') }}</span>
                                                            @endif
                                                </div>
                                            </div>
                                        
                                            <div class="card-footer text-right">
                                                <a href="{{ route('suppliers.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
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

