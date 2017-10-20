@extends('master')
@section('main-content')
<div class="row-fluid sortable">
	<div class="box span4">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm Danh mục</h2>
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
			<form class="form-horizontal" action="{{url('admin/danh-muc')}}" enctype="multipart/form-data" method="POST">

			  <fieldset>
			   <input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="control-group">
				  
				  <div class="control">
					<input type="text" class="span12 " name="danhmuc" id="danhmuc"  >
				  </div>
				  
				</div>
				<div class="control-group">
					<?php
				  	function danmucselect($danhmuc, $parent_id = 0, $char = '') {    foreach ($danhmuc as $key => $item)
							    {
							       
							        if ($item['parent_id'] == $parent_id)
							        {
							            
							                echo '<option value="'.$item['id'].'">';
							                    echo $char . $item['title'];
							                echo '</option>';
							            
							             
							            
							         danmucselect($danhmuc, $item['id'], $char.' -  ');
							        }
							    }






						}

						echo '<select name="danhmuccha">';
						echo '<option value="0">Chọn danh mục cha</option>';
						echo danmucselect($category);
						echo '</select>';


				  ?>
				</div>
				<div class="form-action">
				  <button type="submit" class="btn btn-primary">Thêm</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div>
	<div class="box span8">
		
		<div class="box-content" id="list-user">
			<table  class=" table table-striped table-bordered ">
				<thead>
					<tr>
						<th>Tên danh mục</th>
						<th>Slug</th>
						<th>Sửa / Xóa</th>
					</tr>
				</thead>   
				
				<?php 
					function danmuclist($danhmuclist, $parent_idd = 0, $char = '')
						{
						foreach ($danhmuclist as $key => $dm)
						    {
						        // Nếu là chuyên mục con thì hiển thị
						        if ($dm['parent_id'] == $parent_idd)
						        {?>
						    	<tr>
									<td><?php echo $char;?>{{$dm->title}}</td>
									<td>{{$dm->slug}}</td>
									<td class="center ">
										<a class="btn btn-info" title="view" href='#'>
											<i class="halflings-icon white edit"></i>  
										</a>
										<a class="btn btn-danger blockU" title="block"  href="#" onclick="myFun(this);return false">
											<i class="halflings-icon white lock"></i>
										</a>
									</td>
								</tr>   
						        <?php 
						            // Xóa chuyên mục đã lặp
						            unset($danhmuclist[$key]);
						            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
						            danmuclist($danhmuclist, $dm['id'], $char.' --  ');
						    	}
						 	}
						}
					echo '<tbody>';
					echo danmuclist($category);
					echo '</tbody>';
			  	?>
			</table>            
		</div>
	</div><!--/span-->

</div><!--/row-->

@endsection