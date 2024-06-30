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
                        <h2 class="card-title text-lg"><b>Vehicle Management</b></h2>
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            @can('create-vehicle')
                            <div class="text-right">
                                <a href="{{ route('vehicles.create') }}" class="btn btn-success"><i class="nav-icon fa fa-plus btn-lg"></i></a>
                                <br>
                                <form class="form-inline mt-2">
                                    <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" id="searchInput" type="search" placeholder="Search" aria-label="Search">
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
                                        <th scope="col" width="200px">Name</th>
                                        <th scope="col" width="150px">Plate Number</th>
                                        <th scope="col" width="120px">Make</th>
                                        <th scope="col" width="120px">Series</th>
                                        <th scope="col" width="120px">Body Type</th>
                                        <th scope="col" width="120px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($vehicles as $vehicle)
                                        <tr class="text-center">
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $vehicle->vehicleName }}</td>
                                            <td>{{ $vehicle->plateNumber }}</td>
                                            <td>{{ $vehicle->make }}</td>
                                            <td>{{ $vehicle->series }}</td>
                                            <td>{{ $vehicle->bodyType }}</td>
                                            <td>
                                                <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                        
                                                    <a href="{{ route('vehicles.show', $vehicle->id) }}" class="btn btn-outline-success btn-sm" 
                                                    data-toggle="modal" 
                                                    data-target="#vehicleModal{{ $vehicle->id }}">
                                                    <i class="fa fa-eye"></i></a>

                                                        @can('edit-vehicle')
                                                            <a href="{{ route('vehicles.edit', $vehicle->id) }}" class="btn btn-outline-primary btn-sm"><i class="fa fa-wrench"></i></a>   
                                                        @endcan

                                                        @can('delete-vehicle')
                                                                <button type="submit" class="btn btn-outline-danger btn-sm" id="deleteButton"><i class="fa fa-trash"></i></button>
                                                        @endcan

                                                    <div class="modal fade" id="vehicleModal{{ $vehicle->id }}" tabindex="-1" role="dialog" aria-labelledby="vehicleModalLabel{{ $vehicle->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl"> <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title" id="vehicleModalLabel{{ $vehicle->id }}"><strong>Vehicle Management</strong></h5>
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
                                                                                        <img src="{{asset('backend/dist/img/vehicledetails.png')}}" 
                                                                                            class="img-circle elevation-2" 
                                                                                            alt="User Image" 
                                                                                            style="width: 40px;">
                                                                                            <b class="text-success">
                                                                                                Vehicle Details
                                                                                            </b>
                                                                                        </div>
                                                                                    </div>
                                                                        </div> <!-- /.card -->
                                                                    </div> <!-- /.div col 12 -->

                                                                <div class="form-group row text-sm">
                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="vehicleName" class="col-form-label">Name</label>
                                                                            <input type="text" class="form-control text-center"
                                                                            value="{{ $vehicle->vehicleName }}" readonly>
                                                                            
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="mvfileNo" class="col-form-label">MV File No</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->mvfileNo }}" readonly>                                                                 
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="plateNumber" class="col-form-label">Plate Number</label>
                                                                            <input type="text" class="form-control text-center"                                                                             
                                                                            value="{{ $vehicle->plateNumber }}" readonly>
                                                                            
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="engineNumber" class="col-form-label">Engine Number</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->engineNumber }}" readonly>                                                                            
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row text-sm">
                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="chassisNumber" class="col-form-label">Chassis Number</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->chassisNumber }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="demonition" class="col-form-label">Denomination</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->demonition }}" readonly>
                                                                    </div>
                                                            
                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="pistonDisplacement" class="col-form-label">Piston Displacement</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->pistonDisplacement }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="cylinders" class="col-form-label">Cylinders</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->cylinders }}" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row text-sm">
                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="fuel" class="col-form-label">Fuel</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->fuel }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="make" class="col-form-label">Make</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->make }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="series" class="col-form-label">Series</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->series }}" readonly>
                                                                    </div>              

                                                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                                                        <label for="bodyType" class="col-form-label">Body Type</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->bodyType }}" readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row text-sm">
                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="yearModel" class="col-form-label">Year Model</label>
                                                                            <input type="year" class="form-control text-center" 
                                                                            value="{{ $vehicle->yearModel }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="color" class="col-form-label">Color</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->color }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="grossWt" class="col-form-label">Gross Wt.</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->grossWt }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="netWt" class="col-form-label">Net Wt.</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->netWt }}" readonly>
                                                                    </div>  
                                                                    
                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="shippingWt" class="col-form-label">Shipping Wt.</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->shippingWt }}" readonly>
                                                                    </div>  

                                                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                                                        <label for="netCap" class="col-form-label">Net Cap.</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->netCap }}" readonly>
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
                                                                            <input type="text" class="form-control text-center"
                                                                            value="{{ $vehicle->purchasedDate }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                                        <label for="registrationDate" class="col-form-label">Registration Date</label>
                                                                            <input type="text" class="form-control text-center"
                                                                            value="{{ $vehicle->registrationDate }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                                        <label for="orNo" class="col-form-label">OR No.</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->orNo }}" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row text-sm">
                                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                                        <label for="purchasedCost" class="col-form-label">Purchased Cost</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->purchasedCost }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                                        <label for="depreciationCost" class="col-form-label">Depreciation Cost</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->depreciationCost }}" readonly>
                                                                    </div>

                                                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                                                        <label for="propertyNumber" class="col-form-label">Property Number</label>
                                                                            <input type="text" class="form-control text-center" 
                                                                            value="{{ $vehicle->propertyNumber }}" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.row -->

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
                                                    <strong>No Vehicle Found!</strong>
                                                </span>
                                            </td>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{ $vehicles->links() }}

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
    title: 'Are you sure you want to delete this vehicle?',
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