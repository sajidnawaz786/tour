@include('backend.includes.top')
<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

	@include('backend.includes.sidebar')

	<div class="page-wrapper">
                  <!-- Header -->
    @include('backend.includes.header')

    <div class="content-wrapper">
          <div class="content">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
    @yield('content')

    </div>
        </div>

	@include('backend.includes.footer')

	</div>
    </div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="/backend/assets/plugins/jquery/jquery.min.js"></script>
<script src="/backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/assets/plugins/toaster/toastr.min.js"></script>
<script src="/backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="/backend/assets/plugins/charts/Chart.min.js"></script>
<script src="/backend/assets/plugins/ladda/spin.min.js"></script>
<script src="/backend/assets/plugins/ladda/ladda.min.js"></script>
<script src="/backend/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="/backend/assets/plugins/select2/js/select2.min.js"></script>
<script src="/backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="/backend/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="/backend/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/backend/assets/plugins/jekyll-search.min.js"></script>
<script src="/backend/assets/js/sleek.js"></script>
<script src="/backend/assets/js/chart.js"></script>
<script src="/backend/assets/js/date-range.js"></script>
<script src="/backend/assets/js/map.js"></script>
<script src="/backend/assets/js/custom.js"></script>




  </body>
</html>


