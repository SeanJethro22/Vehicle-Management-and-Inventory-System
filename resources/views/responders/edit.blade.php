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
                        <img src="{{asset('backend/dist/img/responder.png')}}" 
                        class="img-circle elevation-2" 
                        alt="User Image" 
                        style="width: 80px;">
                        <br>
                        <b>Update Responder</b>
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
                                    <img src="{{asset('backend/dist/img/responderdetails.png')}}" 
                                        class="img-circle elevation-2" 
                                        alt="User Image" 
                                        style="width: 40px;">
                                        <b class="text-success">
                                            Update Responder Details
                                        </b>
                                </div>
                            </div>

                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('responders.update', $responder->id) }}" method="post">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="responderFN" class="col-form-label">First Name</label>
                                                        <input type="text" class="form-control @error('responderFN') is-invalid @enderror" 
                                                        id="responderFN" 
                                                        name="responderFN" 
                                                        value="{{ $responder->responderFN }}">
                                                        @if ($errors->has('responderFN'))
                                                            <span class="text-danger">{{ $errors->first('responderFN') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="responderMN" class="col-form-label">Middle Name</label>
                                                        <input type="text" class="form-control @error('responderMN') is-invalid @enderror" 
                                                        id="responderMN" 
                                                        name="responderMN" 
                                                        value="{{ $responder->responderMN }}">
                                                        @if ($errors->has('responderMN'))
                                                            <span class="text-danger">{{ $errors->first('responderMN') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="responderLN" class="col-form-label">Last Name</label>
                                                        <input type="text" class="form-control @error('responderLN') is-invalid @enderror" 
                                                        id="responderLN" 
                                                        name="responderLN" 
                                                        value="{{ $responder->responderLN }}">
                                                        @if ($errors->has('responderLN'))
                                                            <span class="text-danger">{{ $errors->first('responderLN') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="suffix" class="col-form-label">Suffix</label>
                                                        <select name="suffix" id="gender" class="form-control @error('suffix') is-invalid @enderror" 
                                                            value="{{ $responder->suffix }}">
                                                            <option value="N/A" @selected(old('suffix', $responder->suffix) == 'N/A')>N/A</option>
                                                            <option value="Jr." @selected(old('suffix', $responder->suffix) == 'Jr.')>Jr.</option>
                                                            <option value="Sr." @selected(old('suffix', $responder->suffix) == 'Sr.')>Sr.</option>
                                                            <option value="II" @selected(old('suffix', $responder->suffix) == 'II')>II</option>
                                                            <option value="III" @selected(old('suffix', $responder->suffix) == 'III')>III</option>
                                                            <option value="IV" @selected(old('suffix', $responder->suffix) == 'IV')>IV</option>
                                                            <option value="V" @selected(old('suffix', $responder->suffix) == 'V')>V</option>
                                                            <option value="VI" @selected(old('suffix', $responder->suffix) == 'VI')>VI</option>
                                                            <option value="VII" @selected(old('suffix', $responder->suffix) == 'VII')>VII</option>
                                                            <option value="VIII" @selected(old('suffix', $responder->suffix) == 'VIII')>VIII</option>
                                                            <option value="IX" @selected(old('suffix', $responder->suffix) == 'IX')>IX</option>
                                                            <option value="X" @selected(old('suffix', $responder->suffix) == 'X')>X</option>
                                                        </select>
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="dob" class="col-form-label">Date of Birth</label>
                                                        <input type="date" class="form-control @error('dob') is-invalid @enderror" 
                                                        id="dob" 
                                                        name="dob" 
                                                        value="{{ $responder->dob }}">
                                                        @if ($errors->has('dob'))
                                                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                                                        @endif
                                                </div>
                                            
                                                <div class="col-sm-1 mb-3 mb-sm-0">
                                                    <label for="age" class="col-form-label">Age</label>
                                                        <input type="number" class="form-control @error('age') is-invalid @enderror" 
                                                        id="age" 
                                                        name="age" 
                                                        value="{{ $responder->age }}">
                                                        @if ($errors->has('age'))
                                                            <span class="text-danger">{{ $errors->first('age') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="gender" class="col-form-label">Gender</label>
                                                        <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" 
                                                        value="{{ $responder->gender }}">
                                                            <option value="Male" @selected(old('gender', $responder->gender) == 'Male')">Male</option>
                                                            <option value="Female" @selected(old('gender', $responder->gender) == 'Female')>Female</option>
                                                        </select>
                                                        @if ($errors->has('gender'))
                                                            <span class="text-danger">{{ $errors->first('gender') }}</span>
                                                        @endif
                                                </div>
                                           
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="civilStatus" class="col-form-label">Civil Status</label>
                                                        <select name="civilStatus" id="gender" class="form-control @error('civilStatus') is-invalid @enderror" 
                                                        value="{{ $responder->civilStatus }}">                                                            
                                                            <option value="Single" @selected(old('civilStatus', $responder->civilStatus) == 'Single')">Single</option>
                                                            <option value="Married" @selected(old('civilStatus', $responder->civilStatus) == 'Married')">Married</option>
                                                            <option value="Separated" @selected(old('civilStatus', $responder->civilStatus) == 'Separated')">Separated</option>
                                                            <option value="Divorced" @selected(old('civilStatus', $responder->civilStatus) == 'Divorced')">Divorced</option>
                                                            <option value="Widowed" @selected(old('civilStatus', $responder->civilStatus) == 'Widowed')">Widowed</option>
                                                        </select>
                                                        @if ($errors->has('civilStatus'))
                                                            <span class="text-danger">{{ $errors->first('civilStatus') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="mobileNumber" class="col-form-label">Mobile Number</label>
                                                        <input type="text" class="form-control @error('mobileNumber') is-invalid @enderror" 
                                                        id="mobileNumber" 
                                                        name="mobileNumber" 
                                                        value="{{ $responder->mobileNumber }}">
                                                        @if ($errors->has('mobileNumber'))
                                                            <span class="text-danger">{{ $errors->first('mobileNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="email" class="col-form-label">Email Address</label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                        id="email" 
                                                        name="email" 
                                                        value="{{ $responder->email }}">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="ca_street" class="col-form-label">Street</label>
                                                        <input type="text" class="form-control @error('ca_street') is-invalid @enderror" 
                                                        id="ca_street" 
                                                        name="ca_street" 
                                                        value="{{ $responder->ca_street }}">
                                                        @if ($errors->has('ca_street'))
                                                            <span class="text-danger">{{ $errors->first('ca_street') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="ca_purok" class="col-form-label">Purok</label>
                                                        <input type="text" class="form-control @error('ca_purok') is-invalid @enderror" 
                                                        id="ca_purok" 
                                                        name="ca_purok" 
                                                        value="{{ $responder->ca_purok }}">
                                                        @if ($errors->has('ca_purok'))
                                                            <span class="text-danger">{{ $errors->first('ca_purok') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="ca_brgy" class="col-form-label">Barangay</label>
                                                        <input type="text" class="form-control @error('ca_brgy') is-invalid @enderror" 
                                                        id="ca_brgy" 
                                                        name="ca_brgy" 
                                                        value="{{ $responder->ca_brgy }}">
                                                        @if ($errors->has('ca_brgy'))
                                                            <span class="text-danger">{{ $errors->first('ca_brgy') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="ca_cmun" class="col-form-label">City / Municipality</label>
                                                        <input type="text" class="form-control @error('ca_cmun') is-invalid @enderror" 
                                                        id="ca_cmun" 
                                                        name="ca_cmun" 
                                                        value="{{ $responder->ca_cmun }}">
                                                        @if ($errors->has('ca_cmun'))
                                                            <span class="text-danger">{{ $errors->first('ca_cmun') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-10 mb-3 mb-sm-0">
                                                    <label for="ca_province" class="col-form-label">Province</label>
                                                        <input type="text" class="form-control @error('ca_province') is-invalid @enderror" 
                                                        id="ca_province" 
                                                        name="ca_province" 
                                                        value="{{ $responder->ca_province }}">
                                                        @if ($errors->has('ca_province'))
                                                            <span class="text-danger">{{ $errors->first('ca_province') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="ca_zipcode" class="col-form-label">Zip Code</label>
                                                        <input type="text" class="form-control @error('ca_zipcode') is-invalid @enderror" 
                                                        id="ca_zipcode" 
                                                        name="ca_zipcode" 
                                                        value="{{ $responder->ca_zipcode }}">
                                                        @if ($errors->has('ca_zipcode'))
                                                            <span class="text-danger">{{ $errors->first('ca_zipcode') }}</span>
                                                        @endif
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
                                                        <input type="text" class="form-control @error('employeeId') is-invalid @enderror" 
                                                        id="employeeId" 
                                                        name="employeeId" 
                                                        value="{{ $responder->employeeId }}">
                                                        @if ($errors->has('employeeId'))
                                                            <span class="text-danger">{{ $errors->first('employeeId') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="designation" class="col-form-label">Position / Designation</label>
                                                        <input type="text" class="form-control @error('designation') is-invalid @enderror" 
                                                        id="designation" 
                                                        name="designation" 
                                                        value="{{ $responder->designation }}">
                                                        @if ($errors->has('designation'))
                                                            <span class="text-danger">{{ $errors->first('designation') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="status" class="col-form-label">Status</label>
                                                        <select name="status" id="gender" class="form-control @error('status') is-invalid @enderror" 
                                                            value="{{ $responder->status }}">
                                                            <option value="Permanent" @selected(old('status', $responder->status) == 'Permanent')">Permanent</option>
                                                            <option value="Job Order" @selected(old('status', $responder->status) == 'Job Order')">Job Order</option>
                                                            <option value="Contract of Service" @selected(old('status', $responder->status) == 'Contract of Service')">Contract of Service</option>
                                                            <option value="Contractual" @selected(old('status', $responder->status) == 'Contractual')">Contractual</option>
                                                            <option value="Coterminous" @selected(old('status', $responder->status) == 'Coterminous')">Coterminous</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="division" class="col-form-label">Division</label>
                                                        <select name="division" id="division" class="form-control @error('division') is-invalid @enderror" 
                                                            value="{{ $responder->division }}">
                                                            <option value="Administrative Support Services" @selected(old('division', $responder->division) == 'Administrative Support Services')">Administrative Support Services</option>
                                                            <option value="Administration and Training Division" @selected(old('division', $responder->division) == 'Administration and Training Division')">Administration and Training Division</option>
                                                            <option value="Planning and Research Division" @selected(old('division', $responder->division) == 'Planning and Research Division')">Planning and Research Division</option>
                                                            <option value="Operations and Warning Division" @selected(old('division', $responder->division) == 'Operations and Warning Division')">Operations and Warning Division</option>
                                                        </select>
                                                        @if ($errors->has('division'))
                                                            <span class="text-danger">{{ $errors->first('division') }}</span>
                                                        @endif
                                                </div>
                                            </div>                                                
                                        </div><!-- /.row -->

                                            <div class="card-footer text-right">
                                                <a href="{{ route('responders.index') }}" class="btn btn-md btn-outline-dark"><i class="fa fa-undo" aria-hidden="true"></i> Back </a>
                                                <button type="submit" class="btn btn-success btn-md" id="saveButton">
                                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Update </button>
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
    title: 'Save update?',
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
