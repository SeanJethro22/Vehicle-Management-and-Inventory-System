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
                      <h1 class="text-lg"><b>Part Management</b></h1>
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
                            <h3 class="card-title text-lg"><i class="fa fa-user" aria-hidden="true"></i>&nbsp; Update Parts Details</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="float-end">
                                    <a href="{{ route('parts.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('parts.update',$part->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="code" class="col-form-label">Code</label>
                                                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $part->code }}">
                                                        @if ($errors->has('code'))
                                                            <span class="text-danger">{{ $errors->first('code') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $part->name }}">
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="category" class="col-form-label">Category</label>
                                                        <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" value="{{ $part->category }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Medical Supplies">Medical Supplies</option>
                                                            <option value="Medical Equipment">Medical Equipment</option>
                                                        </select>
                                                            @if ($errors->has('category'))
                                                                <span class="text-danger">{{ $errors->first('category') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-1 mb-3 mb-sm-0">
                                                    <label for="quantity" class="col-form-label">Quantity</label>
                                                        <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ $part->quantity }}">
                                                        @if ($errors->has('quantity'))
                                                            <span class="text-danger">{{ $errors->first('quantity') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="unit" class="col-form-label">Unit</label>
                                                        <select name="unit" id="unit" class="form-control @error('unit') is-invalid @enderror" value="{{ $part->unit }}" required>
                                                            <option selected>--Select--</option>
                                                            <option value="Piece">Piece</option>
                                                            <option value="Set">Set</option>
                                                            <option value="Liters">Liters</option>
                                                            <option value="Pack">Pack</option>
                                                        </select>
                                                            @if ($errors->has('unit'))
                                                                <span class="text-danger">{{ $errors->first('unit') }}</span>
                                                            @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="dop" class="col-form-label">Date of Purchased</label>
                                                        <input type="date" class="form-control @error('dop') is-invalid @enderror" id="dop" name="dop" value="{{ $part->dop }}">
                                                        @if ($errors->has('dop'))
                                                            <span class="text-danger">{{ $errors->first('dop') }}</span>
                                                        @endif
                                                </div>
                       
                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="inputImage" class="col-form-label">Image</label>
                                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputImage" name="image" value="{{ $part->image }}">
                                                        <img src="/images/{{ $part->image }}" width="100px">
                                                        @if ($errors->has('image'))
                                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="description" class="col-form-label">Description</label>
                                                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ $part->description }}"></textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary"  value="Update Part">
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

