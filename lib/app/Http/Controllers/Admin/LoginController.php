<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    // định nghĩa hàm getLogin lại s
    public function getLogin(){
    	return view('back_end.login');
    }

    public function postLogin(Request $request){
    	$arr =['email'=>$request->email,'password'=>$request->password];
    	if($request->remember = 'Remember Me'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}



    	if (Auth::attempt($arr,$remember)){
    		# code...
    		// dd('Đăng nhập thành công');
    		return redirect()->intended('admin/home');
    	}else{
    	  // dd('Đăng nhập thất bại');
    		return back()->withInput()->with('error','tài khoản hoặc mật khẩu chưa đúng');
    	}
   	}
 }


// có đc controler ta phải đỗ ra view(giao diện )
// để đăng nhập được dùng Auth .. nó hơi giống return
// thực hiện tiếp chức năng lưu đăng nhập