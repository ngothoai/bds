<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use App\category;
use App\User;
use App\post;
use App\Image;
use App\Tag_post;
use Auth;
class PostController extends Controller
{
    public function getAddpost(){
        $tags = Tags::all();
        $category = category::all();
        return view('admin.add-post', compact('tags','category'));
    }
    public function postAddpost(Request $req){
        $id_user = Auth::user()->id;
        $this->validate($req,
        [
            'title_post' => 'required|min:6|max:200',
            'Content' => 'required',
            'img_post' => 'required|mimes:jpeg,png,jpg,gif|max:4000',
        ],
        [
            'title_post.required' =>'Bạn phải nhập tag',
            'title_post.min' =>'Bạn nên nhập ít nhất 6 ký tự',
            'title_post.max' =>'Bạn không nên nhập quá 120 ký tự',
            'Content.required' =>'Bạn phải nhập Nội dung bài viết',
            'img-post.required' =>'Bạn phải nhập ảnh',
            'img-post.mimes' =>'Bạn phải nhập ảnh đúng định dạng jpeg,png,gif,jpg',
            'img-post.max' =>'Bạn nhập ảnh không được quá 4MB',
        ]);
        $new_post = new Post;
        $new_post->title = $req->title_post;
        $new_post->slug = str_slug($req->title_post, '-');
        $new_post->content = $req->Content;
        $new_post->idcat = $req->category_post;
        $new_post->idUser = $id_user;
        $new_post->save();
        $id = $new_post->id;
        $new_image = new Image;
        if($req->hasFile('img_post')){
            $file = $req->file('img_post');
            $name = $file->getClientOriginalName();
            $tenHinh = time().'_'.str_random(4)."_".$name;
            while(file_exists("uploads/posts/".$tenHinh)){
                $tenHinh = str_random(4)."_".$name;
            }
            $file->move("uploads/posts",$tenHinh);
            $new_image->name_file = $tenHinh;
        }
        $new_image->type_image = "thumnail";
        $new_image->id_post = $id;
        $new_image->save();
        //Tag
        $alltag = $req->tags;
        if(is_array($alltag))
        {
            foreach ($alltag as $key => $value) {
                $new_tag = new Tag_post;
                $new_tag->id_tag = $value;
                $new_tag->id_post = $id;
                $new_tag->type_post = "post";
                $new_tag->save();
            }
        }

        return redirect("admin/new-post")->with('thongbao','Thêm thành công');
    }
    public function getAllposst(){
         $all_post = post::all();
         $images = Image::all();
         $category = category::all();
        return view('admin.list-post', compact('all_post','images','category'));
    }
    //Edit post
     public function getEditpost($id){
         $post = post::find($id);
         $idpost = $id;
         $category = category::all();
         $tagall = Tag_post::all();
         $tags = Tag_post::find($id);
        return view('admin.edit-post', compact('post','tags','idpost','category','tagall'));
    }
     public function postEditpost(Request $req, $id){
        $id_user = Auth::user()->id;
        $this->validate($req,
        [
            'title_post' => 'required|min:6|max:200',
            'Content' => 'required|max:2000',
            'img_post' => 'mimes:jpeg,png,jpg,gif|max:4000',
        ],
        [
            'title_post.min' =>'Bạn nên nhập ít nhất 6 ký tự',
            'title_post.max' =>'Bạn không nên nhập quá 120 ký tự',
            'Content.max' =>'Bạn không nên nhập quá 2000 ký tự',
            'img-post.mimes' =>'Bạn phải nhập ảnh đúng định dạng jpeg,png,gif,jpg',
            'img-post.max' =>'Bạn nhập ảnh không được quá 4MB',
        ]);
        $new_post =  Post::find($id);
        $new_post->title = $req->title_post;
        $new_post->slug = str_slug($req->title_post, '-');
        $new_post->content = $req->Content;
        $new_post->idcat = $req->category_post;
        $new_post->idUser = $id_user;
        $new_post->save();
        $idd = $new_post->id;
        $new_image = new Image;
        if($req->hasFile('img_post')){
            $file = $req->file('img_post');
            $name = $file->getClientOriginalName();
            $tenHinh = time().'_'.str_random(4)."_".$name;
            while(file_exists("uploads/posts/".$tenHinh)){
                $tenHinh = str_random(4)."_".$name;
            }
            $file->move("uploads/posts",$tenHinh);
            $new_image->name_file = $tenHinh;
        }
        $new_image->type_image = "thumnail";
        $new_image->id_post = $idd;
        $new_image->save();
        //Tag
        $tag_remove = Tag_post::where('id_post',$id)->get();
        $tag_remove->delete();
        $alltag = $req->tags;
        if(is_array($alltag))
        {
            foreach ($alltag as $key => $value) {
                $new_tag = new Tag_post;
                $new_tag->id_tag = $value;
                $new_tag->id_post = $id;
                $new_tag->type_post = "post";
                $new_tag->save();
            }
        }

        return redirect("admin/edit-post/".$id)->with('thongbao','Sửa thành công');
    }
    public function getTag(){
         $data['tags'] = Tags::all();
        return view('admin.tags',$data);
    }
    public function postTag(Request $req){
         $this->validate($req,
            [
                'tag' => 'required|unique:tags,title|min:6|max:30',
            ],
            [
                'tag.required' =>'Bạn phải nhập tag',
                'tag.min' =>'Tag từ 6 ký tự trở lên',
                'tag.max' =>'Tag không được quá 30 ký tự',
                'tag.unique' =>'Tag đã tồn tại',
                
            ]);

         $tag = new Tags;
         $tag->title = $req->tag;
         $tag->slug = str_slug($req->tag, '-');
         $tag->save();
        return redirect('admin/them-tag')->with('thongbao','Thêm tags thành công');
    }
}
