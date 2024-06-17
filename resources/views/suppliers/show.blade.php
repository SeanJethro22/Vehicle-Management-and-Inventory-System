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
                                            Supplier Information
                                        </b>
                                </div>
                            </div>

                      </div>
                        <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="supplierName" class="col-md-4 col-form-label text-md-end text-start"><strong>Supplier Name:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->supplierName }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="contactPerson" class="col-md-4 col-form-label text-md-end text-start"><strong>Contact Person:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->contactPerson }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="designation" class="col-md-4 col-form-label text-md-end text-start"><strong>Designation:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->designation }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="contact" class="col-md-4 col-form-label text-md-end text-start"><strong>Contact:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->contact }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="address" class="col-md-4 col-form-label text-md-end text-start"><strong>Address:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->address }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="emailAddress" class="col-md-4 col-form-label text-md-end text-start"><strong>Email Address:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->emailAddress }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="yearEst" class="col-md-4 col-form-label text-md-end text-start"><strong>Year Established:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->yearEst }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="philgepsMembership" class="col-md-4 col-form-label text-md-end text-start"><strong>PhilGEPS Membership:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $supplier->philgepsMembership }}
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                        <a href="{{ route('users.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>
                                </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection

