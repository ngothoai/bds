@extends('master')
@section('main-content')
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm Tag</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			@if(count($errors)>0)
					<div class="alert alert-danger">

                        @foreach($errors->all() as $err)

                            {{$err}}<br>

                        @endforeach

                    </div>

                        

                    @endif

                    @if(session('thongbao'))

                    <div class="alert alert-success">

                        {{session('thongbao')}}

                    </div>
                    @endif
			<form class="form-horizontal" action="{{url('admin/them-tag')}}" enctype="multipart/form-data" method="POST">

			  <fieldset>
			   <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="control-group">
				  <label class="control-label" for="typeahead">Tên tag </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" name="tag" id="tag"  >
				  </div>
				</div>
				
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Thêm</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
		<div class="box-content" id="list-user">
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Tên tag</th>
						<th>Slug</th>
						<th>Sửa / Xóa</th>
					</tr>
				</thead>   
				<tbody>
					
					@foreach($tags as $tag)
					
					<tr>
						
						<td>{{$tag->title}}</td>
						<td>{{$tag->slug}}</td>
						<td class="center ">
							<a class="btn btn-info" title="view" href='#'>
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger blockU" title="block"  href="#" onclick="myFun(this);return false">
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