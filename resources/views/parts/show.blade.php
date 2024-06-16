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
                      <h1 class="text-lg"><b>Parts Management</b></h1>
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
                                            Parts Information
                                        </b>
                                </div>
                            </div>

                      </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->code }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->name }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="category" class="col-md-4 col-form-label text-md-end text-start"><strong>Category:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->category }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->quantity }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="unit" class="col-md-4 col-form-label text-md-end text-start"><strong>Unit:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->unit }}
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="dop" class="col-md-4 col-form-label text-md-end text-start"><strong>Date of Purchased:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->dop }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        {{ $part->description }}
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="image" class="col-md-4 col-form-label text-md-end text-start"><strong>Image:</strong></label>
                                    <div class="col-md-6" style="line-height: 35px;">
                                        <img src="/images/{{ $part->image }}" width="100px">
                                    </div>
                                </div>

                                <div class="card-footer text-right">
                                        <a href="{{ route('parts.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>

                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->  
@endsection


