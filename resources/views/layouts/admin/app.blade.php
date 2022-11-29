<!DOCTYPE html>
<html lang="en">

@include('layouts.admin.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
      @include('layouts.admin.top-nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      @include('layouts.admin.right-nav')
      @include('layouts.admin.side-nav')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layouts.admin.footer')
      </div>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{ asset('js/dataTables.select.min.js')}}"></script>
  <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  {{-- <script src="{{ asset('vendors/select2/select2.min.js')}}"></script> --}}

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js')}}"></script>
  <script src="{{ asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('js/template.js')}}"></script>
  <script src="{{ asset('js/settings.js')}}"></script>
  <script src="{{ asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js')}}"></script>
  <script src="{{ asset('js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->

  

  <script>

      window.addEventListener("load", (e)=>{
      ClassicEditor.create( document.querySelector( '#editor' ) )
      .then( editor => {
          // console.log( editor );
      } )
      .catch( error => {
          // console.error( error );
      } );
  });
  </script>

</body>

</html>

