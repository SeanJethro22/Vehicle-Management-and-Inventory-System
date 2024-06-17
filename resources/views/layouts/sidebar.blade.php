<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0E3386">

    <a href="#" class="brand-link" style="background-color: #041E42">
      <img src="{{asset('backend/dist/img/vmissidebar.png')}}" alt="VMIS Logo" class="img-fluid" style="max-width: 100%; height: auto; opacity: .8">
    </a>
    <div class="sidebar">
      <nav class="mt-5">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{URL::to('/home')}}"" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt" aria-hidden="true"></i>
              <p class="text-md">
                Dashboard
              </p>
            </a>
          </li>
  
  
          <li class="nav-item">
            <a href="{{URL::to('/vehicles')}}" class="nav-link">
              <i class="nav-icon fa fa-car" aria-hidden="true"></i>
              <p class="text-md">
                Vehicles
              </p>
            </a>
          </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                <p class="text-md">
                  Employees
                  <i class="right fa fa-caret-left"></i>
                </p>
              </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{URL::to('/drivers')}}" class="nav-link">
                        <i class="fa fa-male nav-icon"></i>
                        <p>Drivers</p>
                      </a>
                    </li>

                  <li class="nav-item">
                    <a href="{{URL::to('/responders')}}" class="nav-link">
                      <i class="fa fa-heartbeat nav-icon"></i>
                      <p>Responders</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{URL::to('/passengers')}}" class="nav-link">
                      <i class="fa fa-universal-access nav-icon"></i>
                      <p>Passengers</p>
                    </a>
                  </li>
                </ul>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/patients')}}" class="nav-link">
              <i class="nav-icon fa fa-ambulance" aria-hidden="true"></i>
              <p class="text-md">
                Patient Transport
              </p>
            </a>
            </li>
         
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-bell" aria-hidden="true"></i>
              <p class="text-md">
                Expiry Reminders
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-calendar" aria-hidden="true"></i>
              <p class="text-md">
                Maintenance Schedule
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/consumptions')}}" class="nav-link">
              <i class="nav-icon fa fa-thermometer-full" aria-hidden="true"></i>
              <p class="text-md">
                Fuel Consumption
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-history" aria-hidden="true"></i>
              <p class="text-md">
                Maintenance History
              </p>
            </a>
          </li>
             
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cogs" aria-hidden="true"></i>
              <p class="text-md">
                Parts & Inventory
                <i class="right fa fa-caret-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{URL::to('/parts')}}" class="nav-link">
                  <i class="fa fa-cube nav-icon"></i>
                  <p>Parts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{URL::to('/items')}}" class="nav-link">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>Other Inventory</p>
                </a>
              </li>
            </ul>
          </li>
   
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-credit-card" aria-hidden="true"></i>
              <p class="text-md">
                Cost Reporting
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{URL::to('/suppliers')}}" class="nav-link">
              <i class="nav-icon fa fa-user-secret" aria-hidden="true"></i>
              <p class="text-md">
                Suppliers
                </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p class="text-md">
                Accounts
                <i class="right fa fa-caret-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                       <a href="{{URL::to('/users')}}" class="nav-link">
                          <i class="fa fa-user nav-icon"></i>
                          <p>Manage Users</p>
                        </a>
                 </li>
                 <li class="nav-item">
                      <a href="{{URL::to('/roles')}}" class="nav-link">
                        <i class="fa fa-address-book nav-icon"></i>
                        <p>Manage Roles</p>
                      </a>
                </li>
            </ul>                  
          </li>
       
  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>