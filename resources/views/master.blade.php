<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	<script type="text/javascript" language="javascript" src="{{asset('ckeditor/ckeditor.js')}}" ></script>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="backend/css/ie.css" rel="stylesheet">
		<![endif]-->

	<!--[if IE 9]>
		<link id="ie9style" href="backend/css/ie9.css" rel="stylesheet">
		<![endif]-->
		
		<!-- start: Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- end: Favicon -->
		
	</head>

	<body>
		<!-- Modal -->

		@include('admin.modules.navbar')
		
		<div class="container-fluid-full">
			<div class="row-fluid">

				@include('admin.modules.sidebar')

				<!-- start: Content -->
				<div id="content" class="span10">

					@yield('main-content')

				</div><!--/.fluid-container-->

				<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->

		<div class="clearfix"></div>

		<footer>

			<p>
				<span style="text-align:left;float:left">&copy; 2017 - SmartConnect</span>
			</p>

		</footer>

		<!-- start: JavaScript-->

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>

		<script src="{{asset('backend/js/modernizr.js')}}"></script>

		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>

		<script src="{{asset('backend/js/fullcalendar.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.dataTables.min.js')}}"></script>

		<script src="{{asset('backend/js/excanvas.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.stack.js')}}"></script>
		<script src="{{asset('backend/js/jquery.flot.resize.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.chosen.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('backend/js/jquery.cleditor.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.noty.js')}}"></script>

		<script src="{{asset('backend/js/jquery.elfinder.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.raty.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.iphone.toggle.js')}}"></script>

		<script src="{{asset('backend/js/jquery.uploadify-3.1.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.gritter.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.imagesloaded.js')}}"></script>

		<script src="{{asset('backend/js/jquery.masonry.min.js')}}"></script>

		<script src="{{asset('backend/js/jquery.knob.modified.js')}}"></script>

		<script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

		<script src="{{asset('backend/js/counter.js')}}"></script>

		<script src="{{asset('backend/js/retina.js')}}"></script>

		<script src="{{asset('backend/js/custom.js')}}"></script>
		<!-- end: JavaScript-->
		@yield('script')
		<div id="modal-bl" class="modal">
			<div class="form-group header-modal">
				Khóa tài khoản
		 		<a class="close" href="#">x</a>
			</div>
			<div class="form-group content-modal">
				<p style="color: #E8003C">Có khóa tài khoản này không ?</p>
			</div>
			<div class="form-group footer-modal">
				<input type="submit" class="yes-block btn btn-danger" name="yes-block" value="Có">
				<input type="submit" class="no-block btn" name="no-block" value="Không">
			</div>
 		</div>
		<script type="text/javascript">
			
			    function myFun(obj) {
			    	$('body').append('<div id="over">');
        			$('#over').fadeIn(300);
			    	$('.modal').fadeIn();

			    	recipient = obj.getAttribute("href");
			    	$('.content-modal p').text('Khóa tài khoản ' + recipient +'?');
			        return false;
			    }
			    $(document).on('click', "a.close, #over, .no-block", function() {
				       $('#over, .modal').fadeOut(100 , function() {
				           $('#over').remove();
				       });
				      return false;
				 });
		
		</script>
		

	</body>
	</html>
