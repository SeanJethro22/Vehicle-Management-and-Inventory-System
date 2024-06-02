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
                      <h1 class="text-lg"><b>User Management</b></h1>
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
                        <h3 class="card-title text-lg">List of Users</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-role')
                            <div class="float-end">
                                  <a href="{{ route('users.create') }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-plus"></i> Add New User</a>
                            </div>
                            @endcan
                          </div>

                      </div> <!--diri mag end ang copy-->

                      <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                        <th scope="col">S#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @forelse ($user->getRoleNames() as $role)
                                                    <span class="badge bg-primary">{{ $role }}</span>
                                                @empty
                                                @endforelse
                                            </td>
                                            <td>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>

                                                    @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []) )
                                                        @if (Auth::user()->hasRole('Super Admin'))
                                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>
                                                        @endif
                                                    @else
                                                        @can('edit-user')
                                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>   
                                                        @endcan

                                                        @can('delete-user')
                                                            @if (Auth::user()->id!=$user->id)
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this user?');"><i class="fa fa-trash"></i> Delete</button>
                                                            @endif
                                                        @endcan
                                                    @endif

                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="5" class="text-center">
                                                <span class="text-danger">
                                                    <strong>No User Found!</strong>
                                                </span>
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $users->links() }}

                                </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section><!-- /.section content -->
</div><!-- /.content wrapper -->
    
@endsection