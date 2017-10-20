
@extends('master')
@section('title', 'Danh sách User')
@section('main-content')

<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Tất cả tài khoản</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content" id="list-user">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Tên tài khoản</th>
						<th>Email</th>
						<th>Cấp độ</th>
						<th>Ngày tham gia</th>
						<th>View/block</th>
					</tr>
				</thead>   
				<tbody>
					
					@foreach($allUser as $us)
					
					<tr>
						
						<td>{{$us->name}}</td>
						<td>{{$us->email}}</td>
						<td>
							{{$us->role->rolename}}
						</td>
						<td>{{$us->created_at}}</td>
						<td class="center ">
							<a class="btn btn-info" title="view" href='{{url("admin/edit-account/{$us->id}")}}'>
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger blockU" title="block"  href="{{$us->email}}" onclick="myFun(this);return false">
								<i class="halflings-icon white lock"></i>
							</a>
						</td>
					</tr>
					

					@endforeach

				</tbody>
			</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection