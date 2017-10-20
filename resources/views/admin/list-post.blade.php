
@extends('master')
@section('title', 'Danh sách bài viết')
@section('main-content')

<div class="row-fluid sortable">        
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white user"></i><span class="break"></span>Tất cả bài viết</h2>
            <div class="box-icon">
                <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
            </div>
        </div>
        <div class="box-content" id="list-user">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Tên bài</th>
                        <th>Danh mục</th>
                        <th>Ảnh</th>
                        <th>View/block</th>
                    </tr>
                </thead>   
                <tbody>
                    
                    @foreach($all_post as $post)
                    
                    <tr>
                        
                        <td>{{$post->title}}</td>
                        <td>{{$post->category->title}}</td>
                        <td>
                            <img src="{{url('uploads/posts/'.$post->images->name_file)}}">
                        </td>
                        <td class="center ">
                            <a class="btn btn-info" title="view" href='edit-post/{{$post->id}}'>
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger blockU" title="block"  href="" onclick="myFun(this);return false">
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