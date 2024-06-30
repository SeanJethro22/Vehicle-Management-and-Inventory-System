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
                        <img src="{{asset('backend/dist/img/car.png')}}" 
                        class="img-circle elevation-2" 
                        alt="User Image" 
                        style="width: 80px;">
                        <br>
                        <b>Add New Vehicle</b>
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
                                    <img src="{{asset('backend/dist/img/vehicledetails.png')}}" 
                                        class="img-circle elevation-2" 
                                        alt="User Image" 
                                        style="width: 40px;">
                                        <b class="text-success">
                                            Update Vehicle Details
                                        </b>
                                </div>
                            </div>

                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="vehicleName" class="col-form-label">Name</label>
                                                        <input type="text" class="form-control @error('vehicleName') is-invalid @enderror" 
                                                        id="vehicleName" 
                                                        name="vehicleName" 
                                                        value="{{ $vehicle->vehicleName }}">
                                                        @if ($errors->has('vehicleName'))
                                                            <span class="text-danger">{{ $errors->first('vehicleName') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="mvfileNo" class="col-form-label">MV File No</label>
                                                        <input type="text" class="form-control @error('mvfileNo') is-invalid @enderror" 
                                                        id="mvfileNo" 
                                                        name="mvfileNo" 
                                                        value="{{ $vehicle->mvfileNo }}">
                                                        @if ($errors->has('mvfileNo'))
                                                            <span class="text-danger">{{ $errors->first('mvfileNo') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="plateNumber" class="col-form-label">Plate Number</label>
                                                        <input type="text" class="form-control @error('plateNumber') is-invalid @enderror" 
                                                        id="plateNumber" 
                                                        name="plateNumber" 
                                                        value="{{ $vehicle->plateNumber }}">
                                                        @if ($errors->has('plateNumber'))
                                                            <span class="text-danger">{{ $errors->first('plateNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="engineNumber" class="col-form-label">Engine Number</label>
                                                        <input type="text" class="form-control @error('engineNumber') is-invalid @enderror" 
                                                        id="engineNumber" 
                                                        name="engineNumber" 
                                                        value="{{ $vehicle->engineNumber }}">
                                                        @if ($errors->has('engineNumber'))
                                                            <span class="text-danger">{{ $errors->first('engineNumber') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="chassisNumber" class="col-form-label">Chassis Number</label>
                                                        <input type="text" class="form-control @error('chassisNumber') is-invalid @enderror" 
                                                        id="chassisNumber" 
                                                        name="chassisNumber" 
                                                        value="{{ $vehicle->chassisNumber }}">
                                                        @if ($errors->has('chassisNumber'))
                                                            <span class="text-danger">{{ $errors->first('chassisNumber') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="demonition" class="col-form-label">Denomination</label>
                                                        <input type="text" class="form-control @error('demonition') is-invalid @enderror" 
                                                        id="demonition" 
                                                        name="demonition" 
                                                        value="{{ $vehicle->demonition }}">
                                                        @if ($errors->has('demonition'))
                                                            <span class="text-danger">{{ $errors->first('demonition') }}</span>
                                                        @endif
                                                </div>
                                           
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="pistonDisplacement" class="col-form-label">Piston Displacement</label>
                                                        <input type="text" class="form-control @error('pistonDisplacement') is-invalid @enderror" 
                                                        id="pistonDisplacement" 
                                                        name="pistonDisplacement" 
                                                        value="{{ $vehicle->pistonDisplacement }}">
                                                        @if ($errors->has('pistonDisplacement'))
                                                            <span class="text-danger">{{ $errors->first('pistonDisplacement') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="cylinders" class="col-form-label">Cylinders</label>
                                                        <input type="text" class="form-control @error('cylinders') is-invalid @enderror" 
                                                        id="cylinders" 
                                                        name="cylinders" 
                                                        value="{{ $vehicle->cylinders }}">
                                                        @if ($errors->has('pistonDisplacement'))
                                                            <span class="text-danger">{{ $errors->first('pistonDisplacement') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="fuel" class="col-form-label">Fuel</label>
                                                        <input type="text" class="form-control @error('fuel') is-invalid @enderror" 
                                                        id="fuel" 
                                                        name="fuel" 
                                                        value="{{ $vehicle->fuel }}">
                                                        @if ($errors->has('pistonDisplacement'))
                                                            <span class="text-danger">{{ $errors->first('pistonDisplacement') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="make" class="col-form-label">Make</label>
                                                        <input type="text" class="form-control @error('make') is-invalid @enderror" 
                                                        id="make" 
                                                        name="make" 
                                                        value="{{ $vehicle->make }}">
                                                        @if ($errors->has('make'))
                                                            <span class="text-danger">{{ $errors->first('make') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="series" class="col-form-label">Series</label>
                                                        <input type="text" class="form-control @error('series') is-invalid @enderror" 
                                                        id="series" 
                                                        name="series" 
                                                        value="{{ $vehicle->series }}">
                                                        @if ($errors->has('series'))
                                                            <span class="text-danger">{{ $errors->first('series') }}</span>
                                                        @endif
                                                </div>              

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="bodyType" class="col-form-label">Body Type</label>
                                                        <input type="text" class="form-control @error('bodyType') is-invalid @enderror" 
                                                        id="bodyType" 
                                                        name="bodyType" 
                                                        value="{{ $vehicle->bodyType }}">
                                                        @if ($errors->has('bodyType'))
                                                            <span class="text-danger">{{ $errors->first('bodyType') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row text-sm">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="yearModel" class="col-form-label">Year Model</label>
                                                        <input type="year" class="form-control @error('yearModel') is-invalid @enderror" 
                                                        id="yearModel" 
                                                        name="yearModel" 
                                                        value="{{ $vehicle->yearModel }}">
                                                        @if ($errors->has('yearModel'))
                                                            <span class="text-danger">{{ $errors->first('yearModel') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="color" class="col-form-label">Color</label>
                                                        <input type="text" class="form-control @error('color') is-invalid @enderror" 
                                                        id="color" 
                                                        name="color" 
                                                        value="{{ $vehicle->color }}">
                                                        @if ($errors->has('color'))
                                                            <span class="text-danger">{{ $errors->first('color') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="grossWt" class="col-form-label">Gross Wt.</label>
                                                        <input type="text" class="form-control @error('grossWt') is-invalid @enderror" 
                                                        id="grossWt" 
                                                        name="grossWt" 
                                                        value="{{ $vehicle->grossWt }}">
                                                        @if ($errors->has('grossWt'))
                                                            <span class="text-danger">{{ $errors->first('grossWt') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="netWt" class="col-form-label">Net Wt.</label>
                                                        <input type="text" class="form-control @error('netWt') is-invalid @enderror" 
                                                        id="netWt" 
                                                        name="netWt" 
                                                        value="{{ $vehicle->netWt }}">
                                                        @if ($errors->has('netWt'))
                                                            <span class="text-danger">{{ $errors->first('netWt') }}</span>
                                                        @endif
                                                </div>  
                                                
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="shippingWt" class="col-form-label">Shipping Wt.</label>
                                                        <input type="text" class="form-control @error('shippingWt') is-invalid @enderror" 
                                                        id="shippingWt" 
                                                        name="shippingWt" 
                                                        value="{{ $vehicle->shippingWt }}">
                                                        @if ($errors->has('shippingWt'))
                                                            <span class="text-danger">{{ $errors->first('shippingWt') }}</span>
                                                        @endif
                                                </div>  

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="netCap" class="col-form-label">Net Cap.</label>
                                                        <input type="text" class="form-control @error('netCap') is-invalid @enderror" 
                                                        id="netCap" 
                                                        name="netCap" 
                                                        value="{{ $vehicle->netCap }}">
                                                        @if ($errors->has('netCap'))
                                                            <span class="text-danger">{{ $errors->first('netCap') }}</span>
                                                        @endif
                                                </div>  
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="card-title m-1 text-lg">
                                                                <div class="image">
                                                                    <img src="{{asset('backend/dist/img/purchasedetails.png')}}" 
                                                                        class="img-circle elevation-2" 
                                                                        alt="User Image" 
                                                                        style="width: 40px;">
                                                                        <b class="text-success">
                                                                            Purchased Details
                                                                        </b>
                                                                    </div>
                                                                </div>
                                                    </div> <!-- /.card -->
                                                </div> <!-- /.div col 12 -->
                                            

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="purchasedDate" class="col-form-label">Purchased Date</label>
                                                        <input type="date" class="form-control @error('purchasedDate') is-invalid @enderror" 
                                                        id="purchasedDate" 
                                                        name="purchasedDate" 
                                                        value="{{ $vehicle->purchasedDate }}">
                                                        @if ($errors->has('purchasedDate'))
                                                            <span class="text-danger">{{ $errors->first('purchasedDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="registrationDate" class="col-form-label">Registration Date</label>
                                                        <input type="date" class="form-control @error('registrationDate') is-invalid @enderror" 
                                                        id="registrationDate" 
                                                        name="registrationDate" 
                                                        value="{{ $vehicle->registrationDate }}">
                                                        @if ($errors->has('registrationDate'))
                                                            <span class="text-danger">{{ $errors->first('registrationDate') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="orNo" class="col-form-label">OR No.</label>
                                                        <input type="text" class="form-control @error('orNo') is-invalid @enderror" 
                                                        id="orNo" 
                                                        name="orNo" 
                                                        value="{{ $vehicle->orNo }}">
                                                        @if ($errors->has('orNo'))
                                                            <span class="text-danger">{{ $errors->first('orNo') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row text-sm">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="purchasedCost" class="col-form-label">Purchased Cost</label>
                                                        <input type="text" class="form-control @error('purchasedCost') is-invalid @enderror" 
                                                        id="purchasedCost" 
                                                        name="purchasedCost" 
                                                        value="{{ $vehicle->purchasedCost }}">
                                                        @if ($errors->has('purchasedCost'))
                                                            <span class="text-danger">{{ $errors->first('purchasedCost') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="depreciationCost" class="col-form-label">Depreciation Cost</label>
                                                        <input type="text" class="form-control @error('depreciationCost') is-invalid @enderror" 
                                                        id="depreciationCost" 
                                                        name="depreciationCost" 
                                                        value="{{ $vehicle->depreciationCost }}">
                                                        @if ($errors->has('depreciationCost'))
                                                            <span class="text-danger">{{ $errors->first('depreciationCost') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="propertyNumber" class="col-form-label">Property Number</label>
                                                        <input type="text" class="form-control @error('propertyNumber') is-invalid @enderror" 
                                                        id="propertyNumber" 
                                                        name="propertyNumber" 
                                                        value="{{ $vehicle->propertyNumber }}">
                                                        @if ($errors->has('propertyNumber'))
                                                            <span class="text-danger">{{ $errors->first('propertyNumber') }}</span>
                                                        @endif
                                                </div>
                                            </div>
                                        </div><!-- /.row -->

                                            <div class="card-footer text-right">
                                                <a href="{{ route('vehicles.index') }}" class="btn btn-md btn-outline-dark"><i class="fa fa-undo" aria-hidden="true"></i> Back </a>
                                                <button type="submit" class="btn btn-success btn-md" id="updateButton">
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
    const updateButton = document.getElementById('updateButton');

    updateButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission

  Swal.fire({
    title: 'Save update?',
    text: "This action cannot be undone.",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Update!'
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
