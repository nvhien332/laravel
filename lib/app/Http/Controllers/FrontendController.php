<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['featured'] = Product::where('prod_featured',0)->orderBy('prod_id','desc')->take(8)->get();
    	return view('Front_end.Trang_chu',$data);
    }
    public function getDetails($id){
        $data['item']=Product::find($id);

    	
    	return view('Front_end.details',$data);

    }
     public function getDu_an_NhaDat(){
    	
    	return view('Front_end.Du_an_NhaDat');
    }

     public function getLien_he(){
    	
    	return view('Front_end.Lien_he');
    }

     public function getTinTuc_DuAn(){
    	
    	return view('Front_end.TinTuc_DuAn');
    }

     public function getTinTuc_VanBan(){
    	
    	return view('Front_end.TinTuc_VanBan');
    }

     public function getvideo(){
    	
    	return view('Front_end.TinTuc_video');
    }
     public function getDatthue(){
    	
    	return view('Front_end.Datthue');
    }




}
