<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;


class CategoryController extends Controller
{
    //lay ra danh sasch hien thi
    public function getCate(){
    	$data['catelist']= Category::all();
    	return view('back_end.category',$data);
    }
    public function postCate(AddCateRequest $request){
    	$category = new Category;
    	$category->cate_name = $request->name;
    	$category->cate_slug = str_slug($request->name);
    	$category->save();
    	return back();
    	
     }

    public function getEditCate($id){
        $data['cate'] = Category::find($id);
    	return view('back_end.editcategory',$data);
    }

    public function postEditCate(EditCateRequest $request,$id){
        $category = Category::find($id);
    	$category->cate_name = $request->name;
    	$category->cate_slug = str_slug($request->name);
    	$category->save();
    	return redirect()->intended('admin/category');
    }

    public function getDeleteCate($id){
    	Category::destroy($id);
    	return back();
    }

}
