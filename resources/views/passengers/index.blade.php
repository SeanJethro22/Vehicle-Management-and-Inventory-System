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
                      <h1 class="text-lg"><b>Passenger Management</b></h1>
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
                        <h3 class="card-title text-lg">List of Passengers</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-passenger')
                            <div class="float-end">
                                  <a href="{{ route('passengers.create') }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-plus"></i> Add New Passenger</a>
                            </div>
                            @endcan
                          </div>

                      </div> <!--diri mag end ang copy-->

                      <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                        <th scope="col" width="80px">S#</th>
                                        <th scope="col" width="200px">Name</th>
                                        <th scope="col" width="100px">Designation</th>
                                        <th scope="col" width="150px">Division</th>
                                        <th scope="col" width="250px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($passengers as $passenger)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $passenger->passengerName }}</td>
                                            <td>{{ $passenger->position }}</td>
                                            <td>{{ $passenger->division }}</td>
                                            <td>
                                                <form action="{{ route('passengers.destroy', $passenger->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('passengers.show', $passenger->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>

                                                        @can('edit-passenger')
                                                            <a href="{{ route('passengers.edit', $passenger->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>   
                                                        @endcan

                                                        @can('delete-passenger')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this passenger?');"><i class="fa fa-trash"></i> Delete</button>
                                                        @endcan
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="5" class="text-center">
                                                <span class="text-danger">
                                                    <strong>No Passenger Found!</strong>
                                                </span>
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $passengers->links() }}

                            </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section><!-- /.section content -->
</div><!-- /.content wrapper -->
    
@endsection
