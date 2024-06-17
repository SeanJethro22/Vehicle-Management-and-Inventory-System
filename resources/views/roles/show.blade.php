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
                                    <img src="{{asset('backend/dist/img/role.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Roles Information
                                        </b>
                                </div>
                            </div>

                      </div>
                      <!-- /.card-header -->
                            <div class="card-body">
                                    <div class="mb-3 row">
                                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                                        <div class="col-md-6" style="line-height: 35px;">
                                            {{ $role->name }}
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="roles" class="col-md-4 col-form-label text-md-end text-start"><strong>Permissions:</strong></label>
                                        <div class="col-md-6" style="line-height: 35px;">
                                            @if ($role->name=='Super Admin')
                                                <span class="badge bg-primary">All</span>
                                            @else
                                                @forelse ($rolePermissions as $permission)
                                                    <span class="badge bg-primary">{{ $permission->name }}</span>
                                                @empty
                                                @endforelse
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer text-right">
                                        <a href="{{ route('roles.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                </div>
                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->
@endsection