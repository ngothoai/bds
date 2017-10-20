<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Inforuser;
use App\Tags;

class PageController extends Controller
{
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|min:3'
            ],
            [
                'email.required' => 'Bạn chưa nhập đúng email',
                'password.required' => 'Bạn chưa nhập password',
                'password.min' => 'Password không được nhỏ hơn 3 ký tự',
            ]
            );
        if(Auth::attempt(['email' => $request->email,'password'=> $request->password])){
            return redirect('admin/dashboard');
        }else{
            
	            return back()->with('thongbao' , 'Đăng nhập sai rồi vui lòng nhập lại!!!');
	        
        }
        
    }
    public function getLogin()
    {
        return view('admin.login');
    }
    public function LogOut(){
        Auth::logout();
        return redirect('login');
    }
     public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function getThemtaikhoan(){
        $data['role'] = Role::all();
        return view('admin.add-user',$data);
    }
    public function postThemtaikhoan(Request $req){
      $this->validate($req,
            [
                'username' => 'required|min:3',
                'email' => 'required|unique:users,email|email',
                'password' => 'required|min:8',
                'password_again' => 'required|same:password',
            ],
            [
                'username.required' =>'Bạn phải nhập tên tài khoản',
                'username.min' =>'Tên tài khoản phải từ 3 ký tự trở lên',
                'email.required' =>'Bạn phải nhập email',
                'email.unique' =>'Email đã tồn tại',
                'email.email' =>'Định dạng email chưa đúng',
                'password.min' =>'Tên tài khoản phải từ 8 ký tự trở lên',
                'password.required' =>'Bạn phải nhập mật khẩu',
                'password_again.required' =>'Bạn phải nhập lại mật khẩu',
                'password_again.same' =>'Mật khẩu chưa trùng khớp',
            ]);

                $user = new User;
                $user->name = $req->username;
                $user->email = $req->email;
                $user->password= bcrypt($req->password);
                $user->id_Role = $req->level;
               
                
                $user->save();
        return back()->with('thongbao','Thêm tài khoản thành công');
    }
    public function getRegister(){
         $data['role'] = Role::all();
        return view('admin.register', $data);
    }
    public function postRegister(Request $req){
         $this->validate($req,
            [
                'user_reg' => 'required|min:3',
                'email_reg' => 'required|unique:users,email|email',
                'password_reg' => 'required|min:8',
                'password_again_reg' => 'required|same:password_reg',
            ],
            [
                'user_reg.required' =>'Bạn phải nhập tên tài khoản',
                'user_reg.min' =>'Tên tài khoản phải từ 3 ký tự trở lên',
                'email_reg.required' =>'Bạn phải nhập email',
                'email_reg.unique' =>'Email đã tồn tại',
                'email_reg.email' =>'Định dạng email chưa đúng',
                'password_reg.min' =>'Tên tài khoản phải từ 8 ký tự trở lên',
                'password_reg.required' =>'Bạn phải nhập mật khẩu',
                'password_again_reg.required' =>'Bạn phải nhập lại mật khẩu',
                'password_again_reg.same' =>'Mật khẩu chưa trùng khớp',
            ]);

                $user = new User;
                $user->name = $req->user_reg;
                $user->email = $req->email_reg;
                $user->password= bcrypt($req->password_reg);
                $lv = $req->level;
                if($lv=='nguoi_ban'){
                    $lvel = 3;
                }else{
                    $lvel = 4;
                }
                $user->id_Role = $lvel;
               
                
                $user->save();
        return redirect('login')->with('thongbao','Đăng ký thành công');
    }
    public function getAlluser(){
        $data['allUser'] = User::all();
        return view('admin.list-user',$data);
    }
    public function get_myacount($id){
        $data['id'] = User::find($id);
        $data['user'] = Inforuser::where('idUser', $id)->first();
        return view('admin.edit-user',$data);
    }
    public function post_myacount(Request $request, $id){
       
       
        if(null !==(Inforuser::where('idUser', $id)->first())){
             $user = Inforuser::where('idUser', $id)->first();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;  
            $user->birthday = $request->birthday;  
            $user->address = $request->address;  
            $user->address = $request->address;  
            $user->phonenumber  = $request->phonenumber;  
            $user->idUser  = $id;  
            }else{
            $user = new Inforuser;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;  
            $user->birthday = $request->birthday;  
            $user->address = $request->address;  
            $user->address = $request->address;  
            $user->phonenumber  = $request->phonenumber;  
            $user->idUser  = $id;  
            }
        
             $user->save(); 
        


        return redirect('admin/edit-account/'.$id)->with('thongbao','Thêm thông tin thành công');
    }

    
}
