	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Quản lý bất động sản</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li style="padding: 15px">
							<script>
				                var mydate=new Date(); var year=mydate.getYear();   
				                if (year < 1000) year+=1900;
				                var day=mydate.getDay(); 
				                var month=mydate.getMonth(); var daym=mydate.getDate(); 
				                if (daym<10) daym="0"+daym;
				                var dayarray=new Array("Chủ nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy"); 
				                var montharray=new Array("/1","/2","/3","/4","/5","/6","/7","/8","/9","/10","/11","/12");
				                document.write("Hôm nay "+ " - " +dayarray[day]+", Ngày "+daym+""+montharray[month]+"/"+year+"<br>");
							</script>
						</li>
						<li id="screen"  style="padding: 15px"></li>				
						<!-- start: User Dropdown -->
						@if(Auth::user())
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i>
									{{Auth::user()->username}}
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="{{url('admin/logout')}}"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						@endif
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->