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
                    <div class="text-center">
                        <h1 class="text-lg">
                        <img src="{{asset('backend/dist/img/patient.png')}}" 
                        class="img-circle elevation-2" 
                        alt="User Image" 
                        style="width: 80px;">
                        <br>
                        <b>Add Patient Request</b>
                        </h1>
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
                                    <img src="{{asset('backend/dist/img/patientdetails.png')}}" 
                                        class="img-circle elevation-2" 
                                        alt="User Image" 
                                        style="width: 40px;">
                                        <b class="text-success">
                                            Patient Details
                                        </b>
                                </div>
                            </div>

                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('patients.store') }}" method="post">
                                            @csrf

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="requestDate" class="col-form-label">Request Date</label>
                                                        <input type="date" class="form-control @error('requestDate') is-invalid @enderror" 
                                                        id="requestDate" 
                                                        name="requestDate" 
                                                        value="{{ old('requestDate') }}">
                                                        @if ($errors->has('requestDate'))
                                                            <span class="text-danger">{{ $errors->first('requestDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="travelDate" class="col-form-label">Date of Travel</label>
                                                        <input type="date" class="form-control @error('travelDate') is-invalid @enderror" 
                                                        id="travelDate" 
                                                        name="travelDate" 
                                                        value="{{ old('travelDate') }}">
                                                        @if ($errors->has('travelDate'))
                                                            <span class="text-danger">{{ $errors->first('travelDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="travelTime" class="col-form-label">Time to Pick-up</label>
                                                        <input type="time" class="form-control @error('travelTime') is-invalid @enderror" 
                                                        id="travelTime" 
                                                        name="travelTime" 
                                                        value="{{ old('travelTime') }}">
                                                        @if ($errors->has('travelTime'))
                                                            <span class="text-danger">{{ $errors->first('travelTime') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-5 mb-3 mb-sm-0">
                                                    <label for="patientName" class="col-form-label">Patient Name</label>
                                                        <input type="text" class="form-control @error('patientName') is-invalid @enderror" 
                                                        id="patientName" 
                                                        name="patientName" 
                                                        value="{{ old('patientName') }}">
                                                        @if ($errors->has('patientName'))
                                                            <span class="text-danger">{{ $errors->first('patientName') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="patientGender" class="col-form-label">Gender</label>
                                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" 
                                                            value="{{ old('gender') }}">
                                                            <option selected>--Select--</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                        @if ($errors->has('demonition'))
                                                            <span class="text-danger">{{ $errors->first('demonition') }}</span>
                                                        @endif
                                                </div>
                                           
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="patientAge" class="col-form-label">Age</label>
                                                        <input type="text" class="form-control @error('patientAge') is-invalid @enderror" 
                                                        id="patientAge" 
                                                        name="patientAge" 
                                                        value="{{ old('patientAge') }}">
                                                        @if ($errors->has('patientAge'))
                                                            <span class="text-danger">{{ $errors->first('patientAge') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="patientContact" class="col-form-label">Contact Number</label>
                                                        <input type="number" class="form-control @error('patientContact') is-invalid @enderror" 
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
                                                        <input type="text" class="form-control @error('patientAddress') is-invalid @enderror" 
                                                        id="patientAddress" 
                                                        name="patientAddress" 
                                                        value="{{ old('patientAddress') }}">
                                                        @if ($errors->has('patientAddress'))
                                                            <span class="text-danger">{{ $errors->first('patientAddress') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="destination" class="col-form-label">Destination</label>
                                                        <input type="text" class="form-control @error('make') is-invalid @enderror" 
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
                                                        <input type="text" class="form-control @error('diagnoses') is-invalid @enderror" 
                                                        id="diagnoses" 
                                                        name="diagnoses" 
                                                        value="{{ old('diagnoses') }}">
                                                        @if ($errors->has('diagnoses'))
                                                            <span class="text-danger">{{ $errors->first('diagnoses') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="reqStatus" class="col-form-label">Request Status</label>
                                                        <select name="reqStatus" id="reqStatus" class="form-control @error('reqStatus') is-invalid @enderror" 
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
                                                        <select name="vehicleName[]" id="vehicleName" class="form-control @error('vehicleName') is-invalid @enderror">
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
                                                        <select name="name[]" id="name" class="form-control @error('name') is-invalid @enderror" required>
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
                                                        <select name="name[]" id="name" class="form-control @error('name') is-invalid @enderror" required>
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

                                            <div class="card-footer text-right">
                                                <a href="{{ route('patients.index') }}" class="btn btn-md btn-outline-dark"><i class="fa fa-undo" aria-hidden="true"></i> Back </a>
                                                <button type="submit" class="btn btn-success btn-md" id="saveButton">
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Save </button>
                                            </div>
                                        </form>
                                </div> <!-- /.card-body -->
                    </div> <!-- /.card -->
                  </div> <!-- /.div col 12 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section><!-- /.section content -->
</div><!-- /.content wrapper -->

<script>
    const saveButton = document.getElementById('saveButton');

    saveButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission

  Swal.fire({
    title: 'Are you sure you want to save?',
    text: "This action cannot be undone.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, save!'
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

@endsection
