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
                        <h3 class="card-title text-lg">List of Parts</h3>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-part')
                            <div class="float-end">
                                  <a href="{{ route('parts.create') }}" class="btn btn-success btn-sm my-2"><i class="nav-icon fa fa-plus"></i> Add New Part</a>
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
                                        <th scope="col" width="150px">Code</th>
                                        <th scope="col" width="100px">Image</th>
                                        <th scope="col" width="200px">Name</th>
                                        <th scope="col" width="250px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($parts as $part)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $part->code }}</td>
                                            <td><img src="/images/{{ $part->image }}" width="50px"></td>
                                            <td>{{ $part->name }}</td>
                                            <td>
                                                <form action="{{ route('parts.destroy', $part->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{ route('parts.show', $part->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i> Show</a>

                                                            @can('edit-part')
                                                                <a href="{{ route('parts.edit', $part->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i> Edit</a>   
                                                            @endcan

                                                            @can('delete-part')
                                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this part?');"><i class="fa fa-trash"></i> Delete</button>
                                                            @endcan
                                                    </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="5" class="text-center">
                                                <span class="text-danger">
                                                    <strong>No Part Found!</strong>
                                                </span>
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $parts->links() }}
                                {!! $parts->withQueryString()->links('pagination::bootstrap-5') !!}

                                </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </section><!-- /.section content -->
</div><!-- /.content wrapper -->
    
@endsection

