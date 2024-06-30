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
                        <h2 class="card-title text-lg"><b>Patient Transport Management</b></h2>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-patient')
                            <div class="text-right">
                                <a href="{{ route('patients.create') }}" class="btn btn-success"><i class="nav-icon fa fa-plus btn-lg"></i></a>
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
                                        <th scope="col" width="150px">Request Date</th>
                                        <th scope="col" width="150px">Travel Date</th>
                                        <th scope="col" width="150px">Patient's Name</th>
                                        <th scope="col" width="100px">Destination</th>
                                        <th scope="col" width="200px">Request Status</th>
                                        <th scope="col" width="120px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($patients as $patient)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $patient->requestDate }}</td>
                                            <td>{{ $patient->travelDate }}</td>
                                            <td>{{ $patient->patientName }}</td>
                                            <td>{{ $patient->destination }}</td>
                                            <td>{{ $patient->reqStatus }}</td>
                                            <td>
                                                <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                        
                                                    <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-outline-success btn-sm" 
                                                    data-toggle="modal" 
                                                    data-target="#patientModal{{ $patient->id }}">
                                                    <i class="fa fa-eye"></i></a>

                                                        @can('edit-patient')
                                                            <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-wrench"></i></a>   
                                                        @endcan

                                                        @can('delete-patient')
                                                                <button type="submit" class="btn btn-outline-danger btn-sm" id="deleteButton"><i class="fa fa-trash"></i></button>
                                                        @endcan

                                                    <div class="modal fade" id="patientModal{{ $patient->id }}" tabindex="-1" role="dialog" aria-labelledby="patientModalLabel{{ $patient->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl"> <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="patientModalLabel{{ $patient->id }}"><strong>Patient Transport Management</strong></h5>
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
                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="requestDate" class="col-form-label">Request Date</label>
                                                                                    <input type="date" class="form-control text-center" 
                                                                                    value="{{ $patient->requestDate }}" readonly>
                                                                            </div>

                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="travelDate" class="col-form-label">Date of Travel</label>
                                                                                    <input type="date" class="form-control text-center" 
                                                                                    value="{{ $patient->travelDate }}" readonly>
                                                                            </div>

                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="travelTime" class="col-form-label">Time to Pick-up</label>
                                                                                    <input type="time" class="form-control text-center" 
                                                                                    value="{{ $patient->travelTime }}" readonly>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row text-sm">
                                                                            <div class="col-sm-5 mb-3 mb-sm-0">
                                                                                <label for="patientName" class="col-form-label">Patient Name</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    value="{{ $patient->patientName }}" readonly>
                                                                            </div>

                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                <label for="patientGender" class="col-form-label">Gender</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    value="{{ $patient->patientGender }}" readonly>
                                                                            </div>
                                                                    
                                                                            <div class="col-sm-2 mb-3 mb-sm-0">
                                                                                <label for="patientAge" class="col-form-label">Age</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    id="patientAge" 
                                                                                    name="patientAge" 
                                                                                    value="{{ old('patientAge') }}">
                                                                                    @if ($errors->has('patientAge'))
                                                                                        <span class="text-danger">{{ $errors->first('patientAge') }}</span>
                                                                                    @endif
                                                                            </div>

                                                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                                                <label for="patientContact" class="col-form-label">Contact Number</label>
                                                                                    <input type="number" class="form-control text-center" 
                                                                                    id="patientContact" 
                                                                                    name="patientContact" 
                                                                                    value="{{ old('patientContact') }}">
                                                                                    @if ($errors->has('patientContact'))
                                                                                        <span class="text-danger">{{ $errors->first('patientContact') }}</span>
                                                                                    @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row text-sm">
                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                <label for="patientAddress" class="col-form-label">Complete Address</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    id="patientAddress" 
                                                                                    name="patientAddress" 
                                                                                    value="{{ old('patientAddress') }}">
                                                                                    @if ($errors->has('patientAddress'))
                                                                                        <span class="text-danger">{{ $errors->first('patientAddress') }}</span>
                                                                                    @endif
                                                                            </div>

                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                <label for="destination" class="col-form-label">Destination</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    id="destination" 
                                                                                    name="destination" 
                                                                                    value="{{ old('destination') }}">
                                                                                    @if ($errors->has('destination'))
                                                                                        <span class="text-danger">{{ $errors->first('destination') }}</span>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group row text-sm">
                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                <label for="diagnoses" class="col-form-label">Patient's Diagnoses</label>
                                                                                    <input type="text" class="form-control text-center" 
                                                                                    id="diagnoses" 
                                                                                    name="diagnoses" 
                                                                                    value="{{ old('diagnoses') }}">
                                                                                    @if ($errors->has('diagnoses'))
                                                                                        <span class="text-danger">{{ $errors->first('diagnoses') }}</span>
                                                                                    @endif
                                                                            </div>

                                                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                                                <label for="reqStatus" class="col-form-label">Request Status</label>
                                                                                    <select name="reqStatus" id="reqStatus" class="form-control text-center" 
                                                                                        value="{{ old('reqStatus') }}">
                                                                                        <option selected>--Select--</option>
                                                                                        <option value="Approved" class="text-success">Approved</option>
                                                                                        <option value="Pending" class="text-warning">Pending</option>
                                                                                        <option value="Cancelled" class="text-danger">Cancelled</option>
                                                                                    </select>
                                                                                    @if ($errors->has('reqStatus'))
                                                                                        <span class="text-danger">{{ $errors->first('reqStatus') }}</span>
                                                                                    @endif
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <div class="card-title m-1 text-lg">
                                                                                            <div class="image">
                                                                                                <img src="{{asset('backend/dist/img/assignedteam.png')}}" 
                                                                                                    class="img-circle elevation-2" 
                                                                                                    alt="User Image" 
                                                                                                    style="width: 40px;">
                                                                                                    <b class="text-success">
                                                                                                        Assigned Team Details
                                                                                                    </b>
                                                                                                </div>
                                                                                            </div>
                                                                                </div> <!-- /.card -->
                                                                            </div> <!-- /.div col 12 -->
                                                                        

                                                                        <div class="form-group row text-sm">
                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="vehicleName" class="col-form-label">Assigned Vehicle</label>
                                                                                    <select name="vehicleName[]" id="vehicleName" class="form-control text-center">
                                                                                            <option selected>--Select--</option>
                                                                                            @forelse ($vehicles as $vehicle)
                                                                                            <option value="{{ $vehicle }}" {{ in_array($vehicle, old('vehicleName') ?? []) ? 'selected' : '' }}>
                                                                                            {{ $vehicle }}
                                                                                            </option>                                                    
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                        @if ($errors->has('vehicleName'))
                                                                                            <span class="text-danger">{{ $errors->first('vehicleName') }}</span>
                                                                                        @endif
                                                                            </div>

                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="name" class="col-form-label">Assigned Driver</label>
                                                                                    <select name="name[]" id="name" class="form-control text-center>
                                                                                            <option selected>--Select--</option>
                                                                                            @forelse ($drivers as $driver)
                                                                                            <option value="{{ $driver }}" {{ in_array($driver, old('name') ?? []) ? 'selected' : '' }}>
                                                                                            {{ $driver }}
                                                                                            </option>                                                    
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                        @if ($errors->has('name'))
                                                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                                        @endif
                                                                            </div>

                                                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                                                <label for="name" class="col-form-label">Assigned Responder</label>
                                                                                    <select name="name[]" id="name" class="form-control text-center>
                                                                                            <option selected>--Select--</option>
                                                                                            @forelse ($responders as $responder)
                                                                                            <option value="{{ $responder }}" {{ in_array($responder, old('name') ?? []) ? 'selected' : '' }}>
                                                                                            {{ $responder }}
                                                                                            </option>                                                    
                                                                                        @empty
                                                                                        @endforelse
                                                                                    </select>
                                                                                        @if ($errors->has('name'))
                                                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                                        @endif
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

                                {{ $patients->links() }}

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
    title: 'Are you sure you want to delete this request?',
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