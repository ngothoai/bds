@extends('master')
@section('title', 'Sửa bài viết')
@section('main-content')

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
<form action="{{url('admin/edit-post/'.$idpost)}}" enctype="multipart/form-data" method="POST">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<div class="row-fluid ">
    <div class="box span8" ontablet="span6">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon book"></i><span class="break"></span>Thêm bài viết</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content" id="add-post">
            
            
                <div class="control-group">
                    <label class="control-label" for="typeahead">Tiêu đề </label>
                    <div class="controls">
                        <input type="text" class="span12 typeahead" value="{{$post->title}}" name="title_post" id="title_post"  >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="typeahead">Nội dung</label>
                    <textarea id="demo" name="Content" rows="2">{!!$post->content!!}</textarea>
                    <script type="text/javascript" >
                        
                        var content = CKEDITOR.replace( 'Content', {
                        language:'vi',
                        filebrowserBrowseUrl: '{{ url('/') }}/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: '{{ url('/') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageBrowseUrl : '{{ url('/') }}/ckfinder/ckfinder.html?type=Images',
                        filebrowserImageUploadUrl : '{{ url('/') }}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        });

                        
                    </script>
                </div>
        </div>
    </div><!--/span-->
    <div class=" span4 " ontablet="span6">
        <div class="box">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon pencil"></i><span class="break"></span>Đăng bài viết</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content text-center">
                <button type="submit" class="btn btn-primary">Đăng bài viết</button>
            </div>
        </div>
        <div class="box">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon check"></i><span class="break"></span>Danh mục bài viết</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content" id="category-post">
                <div class="control-group">
                    <div class="controls">
                    <?php 
                    function danmuclist($danhmuclist, $parent_idd = 0, $char = '')
                        {
                        foreach ($danhmuclist as $key => $dm)
                            {
                                // Nếu là chuyên mục con thì hiển thị
                                if ($dm['parent_id'] == $parent_idd)
                                {?>
                                    <option  value="{{$dm->id}}"><?php echo $char;?>{{$dm->title}}</option>  
                                <?php 
                                    // Xóa chuyên mục đã lặp
                                    unset($danhmuclist[$key]);
                                    // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                                    danmuclist($danhmuclist, $dm['id'], $char.' --  ');
                                }
                            }
                        }
                            echo '<select class="name-category" name="category_post">';
                            echo danmuclist($category);
                            echo '</select>';
                        ?>
                        
                    </div>
                  </div>        
            </div>
        </div>
        <div class="box">
            <div class="box-header" data-original-title>
                <h2><i class=" halflings-icon tags"></i><span class="break"></span>Tags</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content" >
                <div class="control-group">
                    <label class="control-label" for="selectError1">Chọn thẻ tags</label>
                    <div class="controls">
                        <select id="selectError1"  multiple data-rel="chosen">
                            @foreach($tagall as $tagd)
                                <option value="{{$tagd->id_tag}}" <?php 
                                    if ($tagd->id_post == $idpost) {
                                    ?> selected <?php
                                    }
                                    ?>>{{$tagd->Tag->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div> 
        <div class="box">
            <div class="box-header" data-original-title>
                <h2><i class=" halflings-icon share-alt"></i><span class="break"></span>Upload Ảnh</h2>
                <div class="box-icon">
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content" >
                <div class="control-group">
                      <label class="control-label" for="fileInput">Upload ảnh</label>
                      <div class="controls">
                        <input class="input-file uniform_on" name="img_post" id="fileInput" type="file">
                        <img src="{{url('uploads/posts/'.$post->images->name_file)}}">
                      </div>
                    </div>  
                         
            </div>
        </div>  
    </div>
</div><!--/row-->
</form>     
@endsection