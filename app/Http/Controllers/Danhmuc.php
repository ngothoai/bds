<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class Danhmuc extends Controller
{
    public function getdanhmuc(){
    	$data['category'] = category::with('parent')->get();
    	return view('admin.danhmuc' , $data);
    }
    public function postdanhmuc(Request $req){
    	$danhmuc = new category;
    	$this->validate($req,
           [
                
                'danhmuc' => 'required|unique:category,title|min:6|max:30',
            ],
            [
                'danhmuc.required' =>'Bạn phải nhập tag',
                'danhmuc.min' =>'Danh mục từ 6 ký tự trở lên',
                'danhmuc.max' =>'Danh mục không được quá 30 ký tự',
                'danhmuc.unique' =>'Danh mục đã tồn tại',
                
            ]);
          
		$danhmuc->title = $req->danhmuc;
    	 $danhmuc->slug = str_slug($req->danhmuc, '-');
    	 $danhmuc->parent_id = $req->danhmuccha;
    	 $danhmuc->save();
        
    	return redirect('admin/danh-muc')->with('thongbao','Thêm tags thành công');
    }
}
