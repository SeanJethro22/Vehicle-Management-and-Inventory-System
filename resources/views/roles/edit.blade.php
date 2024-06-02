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
                            <h3 class="card-title text-lg"><i class="fa fa-wrench" aria-hidden="true"></i>&nbsp;Update Role</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <div class="float-end">
                                    <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                                </div>
                            </div>
                        </div> <!--diri mag end ang copy-->

                        <div class="card-body">
                            <form action="{{ route('roles.update', $role->id) }}" method="post">
                                @csrf
                                @method("PUT")

                                <div class="mb-3 row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                                    <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="permissions" class="col-md-4 col-form-label text-md-end text-start">Permissions</label>
                                    <div class="col-md-6">           
                                        <select class="form-select @error('permissions') is-invalid @enderror" multiple aria-label="Permissions" id="permissions" name="permissions[]" style="height: 210px;">
                                            @forelse ($permissions as $permission)
                                                <option value="{{ $permission->id }}" {{ in_array($permission->id, $rolePermissions ?? []) ? 'selected' : '' }}>
                                                    {{ $permission->name }}
                                                </option>
                                            @empty

                                            @endforelse
                                        </select>
                                        @if ($errors->has('permissions'))
                                            <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Role">
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