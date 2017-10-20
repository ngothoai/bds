@extends('master')
@section('main-content')
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thông tin tài khoản</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">

			<form class="form-horizontal" action='{{url("admin/edit-account/{$id->id}")}}' enctype="multipart/form-data" method="POST">
				 

                    @if(session('thongbao'))

                    <div class="alert alert-success">

                        {{session('thongbao')}}

                    </div>
                    @endif
			  <fieldset>
			   <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="control-group">
				  <label class="control-label" for="typeahead">Họ và tên đệm</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" <?php if(null !== $user){?> value="{{$user->firstname}}" <?php  } ?> name="firstname" id="firstname">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Tên </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" name="lastname" <?php if(null !== $user){?> value="{{$user->lastname}}" <?php } ?> id="lastname">
				  </div>
				</div>

				<div class="control-group">
				   <label class="control-label" for="date01">Ngày sinh</label>
					<div class="controls">
						<input type="text" name="birthday"  class="input-xlarge datepicker" <?php if(null !== $user){?> value="{{$user->birthday}}" <?php } ?>  id="date01" >
					</div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Địa chỉ </label>
				  <div class="controls">
					<input type="text" <?php if(null !== $user){?> value="{{$user->address}}" <?php } ?> class="span6 typeahead" name="address" id="address">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Số điện thoại </label>
				  <div class="controls">
					<input type="text" <?php if(null !== $user){?> value="{{$user->phonenumber}}" <?php }?> class="span6 typeahead" name="phonenumber" id="phonenumber">
				  </div>
				</div>
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Cập nhật</button>
				  <a href="{{ url()->previous() }}" class="btn">Quay lại</a>
				  
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection