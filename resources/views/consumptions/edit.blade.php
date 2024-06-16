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
                            <div class="card-title m-1 text-lg">
                                <div class="image">
                                    <img src="{{asset('backend/dist/img/fuel.png')}}" class="img-circle elevation-2" alt="User Image" style="width: 40px;">
                                        <b class="text-success">
                                            Update Fuel Request
                                        </b>
                                </div>
                            </div>
                        
                        </div> <!--diri mag end ang copy-->
                                <div class="card-body">
                                        <form action="{{ route('consumptions.update', $consumption->id)}} }}" method="post">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row">
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="date" class="col-form-label">Date</label>
                                                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $consumption->date }}" required>
                                                        @if ($errors->has('date'))
                                                            <span class="text-danger">{{ $errors->first('date') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="driverName" class="col-form-label">Driver</label>
                                                        <select name="driverName[]" id="driverName" class="form-control @error('driverName') is-invalid @enderror" required>
                                                                <option selected>--Select--</option>
                                                                @forelse ($drivers as $driver)
                                                                <option value="{{ $driver }}" {{ in_array($driver, old('driverName') ?? []) ? 'selected' : '' }}>
                                                                {{ $driver }}
                                                                </option>                                                    
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                            @if ($errors->has('driverName'))
                                                                <span class="text-danger">{{ $errors->first('driverName') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="plateNumber" class="col-form-label">Vehicle Plate Number</label>
                                                        <select name="plateNumber[]" id="plateNumber" class="form-control @error('plateNumber') is-invalid @enderror" required>
                                                                <option selected>--Select--</option>
                                                                @forelse ($vehicles as $vehicle)
                                                                <option value="{{ $vehicle }}" {{ in_array($vehicle, old('plateNumber') ?? []) ? 'selected' : '' }}>
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
                                                    <label for="passengerName" class="col-form-label">Authorized Passenger</label>
                                                        <select name="passengerName[]" id="name" class="form-control @error('passengerName') is-invalid @enderror" required>
                                                                <option selected>--Select--</option>
                                                                @forelse ($passengers as $passenger)
                                                                <option value="{{ $passenger }}" {{ in_array($passenger, old('passengerName') ?? []) ? 'selected' : '' }}>
                                                                {{ $passenger }}
                                                                </option>                                                    
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                            @if ($errors->has('passengerName'))
                                                                <span class="text-danger">{{ $errors->first('passengerName') }}</span>
                                                            @endif
                                                </div>                                                
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="destination" class="col-form-label">Destination</label>
                                                        <input type="text" class="form-control @error('destination') is-invalid @enderror" id="destination" name="destination" value="{{ $consumption->destination }}" required>
                                                        @if ($errors->has('destination'))
                                                            <span class="text-danger">{{ $errors->first('destination') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <label for="purpose" class="col-form-label">Purpose</label>
                                                        <textarea type="text" class="form-control @error('purpose') is-invalid @enderror" id="purpose" name="purpose" value="{{ $consumption->purpose }}" required></textarea>
                                                        @if ($errors->has('purpose'))
                                                            <span class="text-danger">{{ $errors->first('purpose') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="km_start" class="col-form-label">Kilometer Start</label>
                                                        <input type="number" class="form-control @error('km_start') is-invalid @enderror" id="km_start" name="km_start" value="0">
                                                            @if ($errors->has('km_start'))
                                                                <span class="text-danger">{{ $errors->first('km_start') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="km_end" class="col-form-label">Kilometer End</label>
                                                        <input type="number" class="form-control @error('km_end') is-invalid @enderror" id="km_end" name="km_end" value="0">
                                                            @if ($errors->has('km_end'))
                                                                <span class="text-danger">{{ $errors->first('km_end') }}</span>
                                                            @endif
                                                </div>

                                                <div class="col-sm-4 mb-3 mb-sm-0">
                                                    <label for="dist_trav" class="col-form-label">Distance Travelled</label>
                                                        <input type="number" class="form-control @error('dist_trav') is-invalid @enderror" id="dist_trav" name="dist_trav" value="{{ $consumption->dist_trav }}" readonly>
                                                        @if ($errors->has('dist_trav'))
                                                            <span class="text-danger">{{ $errors->first('dist_trav') }}</span>
                                                        @endif
                                                </div>
                                            </div> 
                                            
                                            <div class="form-group row">
                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="td1" class="col-form-label">Time of Departure from Office</label>
                                                        <input type="time" class="form-control @error('td1') is-invalid @enderror" id="td1" name="td1" value="{{ $consumption->td1 }}">
                                                        @if ($errors->has('td1'))
                                                            <span class="text-danger">{{ $errors->first('td1') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="ta1" class="col-form-label">Time of Arrival at Destination</label>
                                                        <input type="time" class="form-control @error('ta1') is-invalid @enderror" id="ta1" name="ta1" value="{{ $consumption->ta1 }}">
                                                        @if ($errors->has('ta1'))
                                                            <span class="text-danger">{{ $errors->first('ta1') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="td2" class="col-form-label">Time of Departure from Destination</label>
                                                        <input type="time" class="form-control @error('td2') is-invalid @enderror" id="td2" name="td2" value="{{ $consumption->td2 }}">
                                                        @if ($errors->has('td2'))
                                                            <span class="text-danger">{{ $errors->first('td2') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-3 mb-3 mb-sm-0">
                                                    <label for="ta2" class="col-form-label">Time of Arrival back to the Office</label>
                                                        <input type="time" class="form-control @error('ta2') is-invalid @enderror" id="ta2" name="ta2" value="{{ $consumption->ta2 }}">
                                                        @if ($errors->has('ta2'))
                                                            <span class="text-danger">{{ $errors->first('ta2') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">                            
                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="bal_start" class="col-form-label">Balance Start</label>
                                                        <input type="number" class="form-control @error('bal_start') is-invalid @enderror" id="bal_start" name="bal_start" value="0">
                                                        @if ($errors->has('bal_start'))
                                                            <span class="text-danger">{{ $errors->first('bal_start') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="issued" class="col-form-label">Issued</label>
                                                        <input type="number" class="form-control @error('issued') is-invalid @enderror" id="issued" name="issued" value="0">
                                                        @if ($errors->has('issued'))
                                                            <span class="text-danger">{{ $errors->first('issued') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="added" class="col-form-label">Added</label>
                                                        <input type="number" class="form-control @error('added') is-invalid @enderror" id="added" name="added" value="0">
                                                        @if ($errors->has('added'))
                                                            <span class="text-danger">{{ $errors->first('added') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="total" class="col-form-label">Total</label>
                                                        <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" value="{{ $consumption->total }}" readonly>
                                                        @if ($errors->has('total'))
                                                            <span class="text-danger">{{ $errors->first('total') }}</span>
                                                        @endif
                                                </div>

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="fuel_cons" class="col-form-label">Fuel Consumed</label>
                                                        <input type="number" class="form-control @error('fuel_cons') is-invalid @enderror" id="fuel_cons" name="fuel_cons" value="0">
                                                        @if ($errors->has('fuel_cons'))
                                                            <span class="text-danger">{{ $errors->first('fuel_cons') }}</span>
                                                        @endif
                                                </div>                                          

                                                <div class="col-sm-2 mb-3 mb-sm-0">
                                                    <label for="bal_end" class="col-form-label">Balance End</label>
                                                        <input type="number" class="form-control @error('bal_end') is-invalid @enderror" id="bal_end" name="bal_end" value="{{ $consumption->bal_end }}" readonly>
                                                        @if ($errors->has('bal_end'))
                                                            <span class="text-danger">{{ $errors->first('bal_end') }}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <a href="{{ route('consumptions.index') }}" class="btn btn-md btn-outline-dark"></i>Back</a>
                                                <button type="submit" class="btn btn-success btn-md">Save</button>
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
        const KilometerStart = document.getElementById("km_start");
        const KilometerEnd = document.getElementById("km_end");
        const DistanceTravelled = document.getElementById("dist_trav");

        function calculateTotalTravel(){
            const km_start = parseFloat(KilometerStart.value) || 0;
            const km_end = parseFloat(KilometerEnd.value) || 0;

            const dist_trav = km_end - km_start;
            DistanceTravelled.value = dist_trav.toFixed(2);
        }

        KilometerStart.addEventListener("input", calculateTotalTravel);
        KilometerEnd.addEventListener("input", calculateTotalTravel);

        calculateTotalTravel(); 
</script>
<script>
        const startBalanceInput = document.getElementById("bal_start");
        const issuedFuelInput = document.getElementById("issued");
        const addedFuelInput = document.getElementById("added");
        const totalFuelDisplay = document.getElementById("total");
        const totalFuelConsumed = document.getElementById("fuel_cons");
        const endBalanceInput = document.getElementById("bal_end");

        function calculateTotalFuel() {
            const bal_start = parseFloat(startBalanceInput.value) || 0;
            const issued = parseFloat(issuedFuelInput.value) || 0;
            const added = parseFloat(addedFuelInput.value) || 0;
            const fuel_cons = parseFloat(totalFuelConsumed.value) || 0;

            const total = bal_start + issued + added;
            totalFuelDisplay.value = total.toFixed(2); 

            const bal_end = total - fuel_cons;
            endBalanceInput.value = bal_end.toFixed(2);
        }

        
        startBalanceInput.addEventListener("input", calculateTotalFuel);
        issuedFuelInput.addEventListener("input", calculateTotalFuel);
        addedFuelInput.addEventListener("input", calculateTotalFuel);
        totalFuelConsumed.addEventListener("input", calculateTotalFuel);


        calculateTotalFuel(); 
</script>

@endsection

