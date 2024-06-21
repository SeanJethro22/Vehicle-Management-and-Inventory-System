  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Vehicle Management and Inventory System | PDRRMO - SC</title>
  <link rel="icon" type="image/x-icon" href="{{asset('backend/dist/img/vmislogo.png')}}">


  <link rel="stylesheet" href="{{asset('backend/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/summernote/summernote-bs4.min.css')}}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('toaster/toastr.min.css')}}">

  <!--calendar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  


  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('backend/dist/img/Internet.gif')}}" alt="vmis logo" height="120" width="120">
  </div>

 
    @include('layouts.navbar')
    @include('layouts.sidebar')
    @yield('content')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <aside class="control-sidebar control-sidebar-light"></aside>

  <footer class="main-footer text-xs">
    <strong>Copyright &copy; 2024 <a href="#">VMIS PDRRMO South Cotabato</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>


<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('backend/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/ responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!--Sweet alert notif-->
<script src="{{asset('toaster/toastr.min.js')}}"></script>
<script src="{{asset('toaster/sweetalert.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!--sweet alert delete-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
  integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script>

    @if(Session::has('message'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break; 
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
    @endif
</script>

<script>

      function confirmation(ev)
      {
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
          title:"Are you sure to delete this user?",
          text: "You won't be able to revert this delete",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willCancel)=>
      {
        if(willCancel){
          window.location.href=urlToRedirect;
        }
      });
      }


</script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
  
  $(document).ready(function () {
        
      var SITEURL = "{{ url('/') }}";

      $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        

      var calendar = $('#calendar').fullCalendar({
                      editable: true,
                      events: SITEURL + "/fullcalendar",
                      displayEventTime: false,
                      editable: true,
                      eventRender: function (event, element, view) {
                          if (event.allDay === 'true') {
                                  event.allDay = true;
                          } else {
                                  event.allDay = false;
                          }
                      },
                      selectable: true,
                      selectHelper: true,
                      select: function (start, end, allDay) {
                          var title = prompt('Event Title:');
                          if (title) {
                              var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                              var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                              $.ajax({
                                  url: SITEURL + "/fullcalendarAjax",
                                  data: {
                                      title: title,
                                      start: start,
                                      end: end,
                                      type: 'add'
                                  },
                                  type: "POST",
                                  success: function (data) {
                                      displayMessage("Event Created Successfully");
    
                                      calendar.fullCalendar('renderEvent',
                                          {
                                              id: data.id,
                                              title: title,
                                              start: start,
                                              end: end,
                                              allDay: allDay
                                          },true);
    
                                      calendar.fullCalendar('unselect');
                                  }
                              });
                          }
                      },
                      eventDrop: function (event, delta) {
                          var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                          var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
    
                          $.ajax({
                              url: SITEURL + '/fullcalendarAjax',
                              data: {
                                  title: event.title,
                                  start: start,
                                  end: end,
                                  id: event.id,
                                  type: 'update'
                              },
                              type: "POST",
                              success: function (response) {
                                  displayMessage("Event Updated Successfully");
                              }
                          });
                      },
                      eventClick: function (event) {
                          var deleteMsg = confirm("Do you really want to delete?");
                          if (deleteMsg) {
                              $.ajax({
                                  type: "POST",
                                  url: SITEURL + '/fullcalendarAjax',
                                  data: {
                                          id: event.id,
                                          type: 'delete'
                                  },
                                  success: function (response) {
                                      calendar.fullCalendar('removeEvents', event.id);
                                      displayMessage("Event Deleted Successfully");
                                  }
                              });
                          }
                      }
   
                  });
   
      });
        

      function displayMessage(message) {
          toastr.success(message, 'Event');
      } 
      
  </script>

</body>
</html>
