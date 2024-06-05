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
                        <h3 class="card-title text-lg">List of Fuel Requests</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-consumption')
                            <div class="float-end">
                                  <a href="{{ route('consumptions.create') }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-plus"></i> Add Fuel Request</a>
                            </div>
                            @endcan
                          </div>

                      </div> <!--diri mag end ang copy-->

                      <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-center">
                                        <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Passenger</th>
                                        <th scope="col">Destination</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($consumptions as $consumption)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $consumption->date }}</td>
                                            <td>{{ $consumption->passenger }}</td>
                                            <td>{{ $consumption->destination }}</td>
                                            <td>
                                                <form action="{{ route('cosnumptions.destroy', $consumption->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a href="{{ route('cosnumptions.show', $consumption->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>

                                                        @can('edit-consumption')
                                                            <a href="{{ route('cosnumptions.edit', $consumption->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>   
                                                        @endcan

                                                        @can('delete-consumption')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this fuel request?');"><i class="fa fa-trash"></i> Delete</button>
                                                        @endcan
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="5" class="text-center">
                                                <span class="text-danger">
                                                    <strong>No Request Found!</strong>
                                                </span>
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $consumptions->links() }}

                            </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section><!-- /.section content -->
</div><!-- /.content wrapper -->
    
@endsection