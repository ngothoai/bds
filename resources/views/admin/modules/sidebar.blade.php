<!-- start: Main Menu -->

<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li><a href="{{url('admin/dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
			<li>
				<a class="dropmenu" href="#"><i class="icon-file"></i><span class="hidden-tablet"> Bài viết</span></a>
				<ul>
					<li><a class="submenu" href="{{url('admin/new-post')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Viết bài mới</span></a></li>
					<li><a class="submenu" href="{{url('admin/all-post')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tất cả bài viết</span></a></li>
					<li><a class="submenu" href="{{url('admin/danh-muc')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh mục</span></a></li>
					<li><a class="submenu" href="{{url('admin/them-tag')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tag</span></a></li>
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-sitemap"></i><span class="hidden-tablet"> Dự án bất động sản</span></a>
				<ul>
					<li><a class="submenu" href="{{url('admin/new-post-property')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Đăng bất động sản</span></a></li>
					<li><a class="submenu" href="{{url('admin/all-post-property')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tất cả bất động sản</span></a></li>
					<li><a class="submenu" href="{{url('admin/property')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Danh mục dự án</span></a></li>
				</ul>	
			</li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet"> Tài khoản</span></a>
				<ul>
					<li><a class="submenu" href="{{url('admin/them-tai-khoan')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Thêm tài khoản</span></a></li>
					<li><a class="submenu" href="{{url('admin/danh-sach-tai-khoan')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tất cả tài khoản</span></a></li>
					<li><a class="submenu" href="{{url('admin/user-block')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Tài khoản bị khóa</span></a></li>
				</ul>	
			</li>

			<li><a href="{{url('admin/customer')}}"><i class="icon-tasks"></i><span class="hidden-tablet"> Danh sách khách hàng</span></a></li>
			<li>
				<a class="dropmenu" href="#"><i class="icon-cog"></i><span class="hidden-tablet"> Setting</span></a>
				<ul>
					<li><a class="submenu" href="{{url('admin/menu')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Menu</span></a></li>
					<li><a class="submenu" href="{{url('admin/option')}}"><i class="icon-file-alt"></i><span class="hidden-tablet"> Option</span></a></li>
					
				</ul>	
			</li>
			<li><a href="{{url('admin/logout')}}"><i class="icon-lock"></i><span class="hidden-tablet"> Đăng xuất</span></a></li>
		</ul>
	</div>
</div>
			<!-- end: Main Menu -->