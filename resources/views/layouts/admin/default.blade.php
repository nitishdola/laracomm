<!DOCTYPE html>
<html>
  
<head>
    <title>
      Administrator 
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/font-awesome.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/se7en-font.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/isotope.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/jquery.fancybox.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/fullcalendar.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/wizard.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/select2.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/morris.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/datatables.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/datepicker.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/timepicker.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/colorpicker.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/bootstrap-switch.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/daterange-picker.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/typeahead.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/summernote.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/pygments.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/style.css') }}" media="all" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/color/green.css') }}" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/color/orange.css') }}" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/color/magenta.css') }}" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
	<link href="{{ asset('assets/admin_assets/stylesheets/color/gray.css') }}" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
	
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.js') }}" type="text/javascript">
	</script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery-ui-i18n.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/raphael.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/selectivizr-min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.mousewheel.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.vmap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.vmap.world.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/fullcalendar.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/gcal.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.dataTables.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/datatable-editable.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.easy-pie-chart.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/excanvas.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.isotope.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/isotope_extras.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/modernizr.custom.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/select2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/styleswitcher.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/wysiwyg.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/summernote.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.inputmask.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.validate.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap-fileupload.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap-datepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap-timepicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap-colorpicker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/bootstrap-switch.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/typeahead.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/daterange-picker.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/date.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/morris.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/skycons.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/fitvids.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/jquery.sparkline.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/main.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/admin_assets/javascripts/respond.js') }}" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    @yield('page_specific_css')
</head>
<body>
	<div class="modal-shiftfix">
		<!-- Start Navigation -->
		@include('layouts.admin.navbar')
		<!-- End Navigation -->
      	<div class="container-fluid main-content">
      		@yield('content')
      	</div>
    </div>
    @yield('page_specific_js')
</body>
</html>