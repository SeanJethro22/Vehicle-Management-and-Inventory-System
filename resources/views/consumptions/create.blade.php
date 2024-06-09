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
                      <h1 class="text-lg"><b>Fuel Consumption Management</b></h1>
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
                                    <img src="{{asset('backend/dist/img/fuel.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Add Fuel Request
                                        </b>
                                </div>
                            </div>
                        
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('consumptions.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="date" class="col-form-label">Date</label>
                                                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                                                        @if ($errors->has('date'))
                                                            <span class="text-danger">{{ $errors->first('date') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Driver Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="passenger" class="col-form-label">Passenger</label>
                                                        <input type="text" class="form-control @error('passenger') is-invalid @enderror" id="passenger" name="passenger" value="{{ old('passenger') }}" required>
                                                        @if ($errors->has('passenger'))
                                                            <span class="text-danger">{{ $errors->first('passenger') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="destination" class="col-form-label">Destination</label>
                                                        <input type="text" class="form-control @error('destination') is-invalid @enderror" id="destination" name="destination" value="{{ old('destination') }}" required>
                                                        @if ($errors->has('destination'))
                                                            <span class="text-danger">{{ $errors->first('destination') }}</span>
                                                        @endif
                                                </div>
                                            </div>                                          

                                            <div class="form-group row">
                                                <div class="col-sm-12 mb-3 mb-sm-0">
                                                    <label for="purpose" class="col-form-label">Purpose</label>
                                                        <textarea type="text" class="form-control @error('purpose') is-invalid @enderror" id="purpose" name="purpose" value="{{ old('purpose') }}" required></textarea>
                                                        @if ($errors->has('purpose'))
                                                            <span class="text-danger">{{ $errors->first('purpose') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="km_start" class="col-form-label">Kilometer Start</label>
                                                        <input type="number" class="form-control @error('km_start') is-invalid @enderror" id="km_start" name="km_start" value="{{ old('km_start') }}" required>
                                                            @if ($errors->has('km_start'))
                                                                <span class="text-danger">{{ $errors->first('km_start') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="km_end" class="col-form-label">Kilometer End</label>
                                                        <input type="number" class="form-control @error('km_end') is-invalid @enderror" id="km_end" name="km_end" value="{{ old('km_end') }}" required>
                                                            @if ($errors->has('km_end'))
                                                                <span class="text-danger">{{ $errors->first('km_end') }}</span>
                                                            @endif
                                                </div>
                                                            
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="dist_trav" class="col-form-label">Distance Travelled</label>
                                                        <input type="number" class="form-control @error('dist_trav') is-invalid @enderror" id="dist_trav" name="dist_trav" value="{{ old('dist_trav') }}">
                                                        @if ($errors->has('dist_trav'))
                                                            <span class="text-danger">{{ $errors->first('dist_trav') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="bal_start" class="col-form-label">Balance Start</label>
                                                        <input type="number" class="form-control @error('bal_start') is-invalid @enderror" id="bal_start" name="bal_start" value="{{ old('bal_start') }}">
                                                        @if ($errors->has('bal_start'))
                                                            <span class="text-danger">{{ $errors->first('bal_start') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="bal_end" class="col-form-label">Balance End</label>
                                                        <input type="number" class="form-control @error('bal_end') is-invalid @enderror" id="bal_end" name="bal_end" value="{{ old('bal_end') }}">
                                                        @if ($errors->has('bal_end'))
                                                            <span class="text-danger">{{ $errors->first('bal_end') }}</span>
                                                        @endif
                                                </div>
                                                
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="fuel_cons" class="col-form-label">Fuel Consumed</label>
                                                        <input type="number" class="form-control @error('fuel_cons') is-invalid @enderror" id="fuel_cons" name="fuel_cons" value="{{ old('fuel_cons') }}">
                                                        @if ($errors->has('fuel_cons'))
                                                            <span class="text-danger">{{ $errors->first('fuel_cons') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <a href="{{ route('consumptions.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
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
