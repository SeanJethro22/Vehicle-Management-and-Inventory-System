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
                        <h3 class="card-title text-lg">List of Roles</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-role')
                            <div class="float-end">
                                  <a href="{{ route('roles.create') }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-plus"></i> Add New Role</a>
                            </div>
                            @endcan
                          </div>

                      </div> <!--diri mag end ang copy-->

                      <!-- /.card-header -->
                      <div class="card-body">
                          <table class="table table-striped table-bordered table-hover">
                            <thead class="text-center">
                              <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Name</th>
                                <th scope="col" style="width: 250px;">Action</th>
                              </tr>
                            </thead>
                            <tbody>
        
                            @forelse($roles as $role)
                            <tr class="text-center">
                    
                                <th scope="row">{{ $loop->iteration }}</th>
                                <th>{{ $role->name }}</th>

                                <td class="text-center">
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>

                                        @if ($role->name!='Super Admin')
                                            @can('edit-role')
                                                <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>   
                                            @endcan

                                            @can('delete-role')
                                                @if ($role->name!=Auth::user()->hasRole($role->name))
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this role?');"><i class="fa fa-trash"></i> Delete</button>
                                                @endif
                                            @endcan
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <td colspan="5" class="text-center">
                                    <span class="text-danger">
                                        <strong>No Roles Found!</strong>
                                    </span>
                                </td>
                            @endforelse
                          </table>
                      </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section><!-- /.section content -->
</div><!-- /.content wrapper -->
@endsection