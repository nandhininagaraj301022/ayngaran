  <!-- BACK-TO-TOP -->
  <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JQUERY JS -->
  <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

  <!-- BOOTSTRAP JS -->
  <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- INPUT MASK JS-->
  <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

  <!-- SIDE-MENU JS -->
  <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

  <!-- SIDEBAR JS -->
  <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>
  <!-- Data table -->
  <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js   ') }}"></script>

  <!-- Perfect SCROLLBAR JS-->
  <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
  <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

  <!-- SWEET-ALERT JS -->
  <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
  <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
  <!-- Select 2 -->
  <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
  <!-- INTERNAL Bootstrap-Datepicker js-->
  <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <!-- BOOTSTRAP-DATERANGEPICKER JS -->
  <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <!-- DATEPICKER JS -->
  <script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
  <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>
  <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
  </script>
  <!-- Form CUSTOM JS-->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  @yield('scripts')

  <!-- CUSTOM JS-->
  <script src="{{ asset('assets/js/custom.js') }}"></script>
