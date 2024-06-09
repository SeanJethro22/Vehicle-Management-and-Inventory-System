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
                      <h1 class="text-lg"><b>Role Management</b></h1>
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
                                    <img src="{{asset('backend/dist/img/user.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Add New User
                                        </b>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('users.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="name" class="col-form-label">Name</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="email" class="col-form-label">Email Address</label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="password" class="col-form-label">Password</label>
                                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="password_confirmation" class="col-form-label">Confirm Password</label>
                                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="roles" class="col-md-4 col-form-label text-md-end text-start">Roles</label>
                                                <div class="col-md-6">           
                                                    <select class="form-select @error('roles') is-invalid @enderror" multiple aria-label="Roles" id="roles" name="roles[]">
                                                        @forelse ($roles as $role)

                                                            @if ($role!='Super Admin')
                                                                <option value="{{ $role }}" {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                                {{ $role }}
                                                                </option>
                                                            @else
                                                                @if (Auth::user()->hasRole('Super Admin'))   
                                                                    <option value="{{ $role }}" {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                                    {{ $role }}
                                                                    </option>
                                                                @endif
                                                            @endif

                                                        @empty

                                                        @endforelse
                                                    </select>
                                                    @if ($errors->has('roles'))
                                                        <span class="text-danger">{{ $errors->first('roles') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="card-footer text-right">
                                                <a href="{{ route('users.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
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