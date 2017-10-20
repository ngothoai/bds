@extends('master')
@section('main-content')
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm tài khoản</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="{{url('admin/them-tai-khoan')}}" enctype="multipart/form-data" method="POST">
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
			  <fieldset>
			   <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="control-group">
				  <label class="control-label" for="typeahead">Tên đăng nhập </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" name="username" id="username"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Email </label>
				  <div class="controls">
					<input type="email" class="span6 typeahead" name="email" id="email"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Mật khẩu </label>
				  <div class="controls">
					<input type="password" class="span6 typeahead" id="password"  name="password">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Nhập lại mật khẩu </label>
				  <div class="controls">
					<input type="password" class="span6 typeahead" id="password-again" name="password_again" >
				  </div>
				</div>
                <div class="control-group">
                <label class="control-label" for="typeahead">Cấp độ user </label>
                 @foreach($role as $rl)
				  <label class="controls">
					<input type="radio" name="level"  value="{{$rl->level}}" @if($rl->level==4) checked="" @endif>
					{{$rl->rolename}}
				  </label>
				  <div style="clear:both"></div>
				  @endforeach
				</div>
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Thêm</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection