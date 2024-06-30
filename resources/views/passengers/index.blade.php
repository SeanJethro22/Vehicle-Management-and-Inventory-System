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

            </div><!-- /.container-fluid -->
        </section><!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header mt-3">
                        <h2 class="card-title text-lg"><b>Passenger Management</b></h2>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-passenger')
                            <div class="text-right">
                                <a href="{{ route('passengers.create') }}" class="btn btn-success"><i class="nav-icon fa fa-plus btn-lg"></i></a>
                                <br>
                                <form class="form-inline mt-2">
                                    <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                </form>
                            </div>
                            @endcan
                          </div>

                      </div> <!--diri mag end ang copy-->

                      <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-center bg-success text-sm">
                                        <tr>
                                        <th scope="col" width="50px">S/N</th>
                                        <th scope="col" width="150px">First Name</th>
                                        <th scope="col" width="150px">Middle Name</th>
                                        <th scope="col" width="150px">Last Name</th>
                                        <th scope="col" width="100px">Employee ID</th>
                                        <th scope="col" width="200px">Designation</th>
                                        <th scope="col" width="120px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($passengers as $passenger)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $passenger->passengerFN }}</td>
                                            <td>{{ $passenger->passengerMN }}</td>
                                            <td>{{ $passenger->passengerLN }}</td>
                                            <td>{{ $passenger->employeeId }}</td>
                                            <td>{{ $passenger->designation }}</td>
                                            <td>
                                                <form action="{{ route('passengers.destroy', $passenger->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                        
                                                    <a href="{{ route('passengers.show', $passenger->id) }}" class="btn btn-outline-success btn-sm" 
                                                    data-toggle="modal" 
                                                    data-target="#passengerModal{{ $passenger->id }}">
                                                    <i class="fa fa-eye"></i></a>

                                                        @can('edit-passenger')
                                                            <a href="{{ route('passengers.edit', $passenger->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-wrench"></i></a>   
                                                        @endcan

                                                        @can('delete-passenger')
                                                                <button type="submit" class="btn btn-outline-danger btn-sm" id="deleteButton"><i class="fa fa-trash"></i></button>
                                                        @endcan

                                                    <div class="modal fade" id="passengerModal{{ $passenger->id }}" tabindex="-1" role="dialog" aria-labelledby="passengerModalLabel{{ $passenger->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl"> <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="passengerModalLabel{{ $passenger->id }}"><strong>Passenger Management</strong></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="card">
                                                                                <div class="card-header">
                                                                                    <div class="card-title m-1 text-lg">
                                                                                        <div class="image">
                                                                                            <img src="{{asset('backend/dist/img/passengerdetails.png')}}" 
                                                                                                class="img-circle elevation-2" 
                                                                                                alt="User Image" 
                                                                                                style="width: 40px;">
                                                                                                <b class="text-success">
                                                                                                    Passenger Details
                                                                                                </b>
                                                                                        </div>
                                                                                    </div>
                                                                            </div> <!-- /.card -->
                                                                        </div> <!-- /.div col 12 -->

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                                <label for="passengerFN" class="col-form-label">First Name</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->passengerFN }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                                <label for="passengerMN" class="col-form-label">Middle Name</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->passengerMN }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                                <label for="passengerLN" class="col-form-label">Last Name</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->passengerLN }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                                <label for="suffix" class="col-form-label">Suffix</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->suffix }}" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                                <label for="dob" class="col-form-label">Date of Birth</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->dob }}" readonly>
                                                                                            </div>
                                                                                        
                                                                                            <div class="col-sm-1 mb-3 mb-sm-0">
                                                                                                <label for="age" class="col-form-label">Age</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->age }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                                <label for="gender" class="col-form-label">Gender</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->gender }}" readonly>
                                                                                            </div>
                                                                                    
                                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                                <label for="civilStatus" class="col-form-label">Civil Status</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->civilStatus }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                                <label for="mobileNumber" class="col-form-label">Mobile Number</label>
                                                                                                    <input type="text" class="form-control text-center"
                                                                                                    value="{{ $passenger->mobileNumber }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                                <label for="email" class="col-form-label">Email Address</label>
                                                                                                    <input type="email" class="form-control text-center"
                                                                                                    value="{{ $passenger->email }}" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="ca_street" class="col-form-label">Street</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->ca_street }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="ca_purok" class="col-form-label">Purok</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->ca_purok }}" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="ca_brgy" class="col-form-label">Barangay</label>
                                                                                                    <input type="text" class="form-control text-center"
                                                                                                    value="{{ $passenger->ca_brgy }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="ca_cmun" class="col-form-label">City / Municipality</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->ca_cmun }}" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-10 mb-3 mb-sm-0">
                                                                                                <label for="ca_province" class="col-form-label">Province</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->ca_province }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                                <label for="ca_zipcode" class="col-form-label">Zip Code</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->ca_zipcode }}" readonly>
                                                                                            </div>
                                                                                        </div>                                            
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <div class="card">
                                                                                                    <div class="card-header">
                                                                                                        <div class="card-title m-1 text-lg">
                                                                                                            <div class="image">
                                                                                                                <img src="{{asset('backend/dist/img/employmentdetails.png')}}" 
                                                                                                                    class="img-circle elevation-2" 
                                                                                                                    alt="User Image" 
                                                                                                                    style="width: 40px;">
                                                                                                                    <b class="text-success">
                                                                                                                        Employment Details
                                                                                                                    </b>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                </div> <!-- /.card -->
                                                                                            </div> <!-- /.div col 12 -->                                            

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="employeeId" class="col-form-label">Employee ID</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->employeeId }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="designation" class="col-form-label">Position / Designation</label>
                                                                                                    <input type="text" class="form-control text-center"
                                                                                                    value="{{ $passenger->designation }}" readonly>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group row text-sm">
                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="status" class="col-form-label">Status</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->status }}" readonly>
                                                                                            </div>

                                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                                <label for="division" class="col-form-label">Division</label>
                                                                                                    <input type="text" class="form-control text-center" 
                                                                                                    value="{{ $passenger->division }}" readonly>
                                                                                            </div>
                                                                                        </div>                                                
                                                                                    </div><!-- /.row -->
                                                                                </form>
                                                                            </div> <!-- /.card-body -->

                                                                    <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->                
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <td colspan="7" class="text-center">
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

<script>

  const deleteButton = document.getElementById('deleteButton');

  deleteButton.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default form submission

  Swal.fire({
    title: 'Are you sure you want to delete this passenger?',
    text: "This action cannot be undone.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete!'
  }).then((result) => {
    if (result.isConfirmed) {
      // Submit the form manually
      this.form.submit();
    }
  });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


@endsection