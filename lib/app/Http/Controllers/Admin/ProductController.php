<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\Product;
use App\Models\Category;
use DB;
// định nghĩa lại hàm product
class ProductController extends Controller
{
    //
    public function getProduct(){
        $data['productlist'] = DB::table('vp_products')->join('vp_categories','vp_products.prod_cate','=','vp_categories.cate_id')->orderBy('prod_id','desc')->get();
    	return view('back_end.product',$data);

    }
    public function getAddProduct(){
        $data['catelist']=Category::all();
    	return view('back_end.addproduct',$data);
    	
    }
    public function postAddProduct(AddProductRequest $request){
        $filename = $request->img->getClientOriginalName();
        $product = new Product;
        $product->prod_name = $request->name;// tên 
        $product->prod_slug = str_slug($request->name);
        $product->prod_price = $request->price;//giá
        $product->prod_img = $filename;// ảnh

        $product->prod_condition = $request->condition;// tình trạng

        $product->prod_promotion = $request->promotion;// khuyến mãi 
        $product->prod_status= $request->status;//trạng thái
        $product->prod_description= $request->description;//miêu tả
        $product->prod_cate= $request->cate;//danh mục
        $product->prod_featured= 0;

        $product->save();// hiễn thị 
        $request->img->storeAs('avata',$filename);
        return back();

       
    }
    public function getEditProduct($id){
        $data['product'] = Product::find($id);
        $data['listcate'] = Category::all();
    	return view('back_end.editproduct',$data);
    	
    }// sua product
    public function postEditProduct(Request $request,$id){
        $product = new Product;
        $arr['prod_name'] = $request->name;
        $arr['prod_slug'] = str_slug($request->name);
        $arr['prod_price'] =  $request->price;
        //img lam rieng

        $arr['prod_condition'] =  $request->condition;
        $arr['prod_promotion'] =  $request->promotion;
        $arr['prod_status'] =  $request->status;
        $arr['prod_description'] = $request->description;
        // $arr['prod_cate'] =  $request->cate;
        if($request->hasFile('img')){
            $img ==$request->img->getClientOriginalName();
            $arr['prod_img'] = $img;
            $request->img->storeAs('avata'.$img);
        }

        $product::where('prod_id',$id)->update($arr);
        return redirect('admin/product');
    	
    }
    //xoa product
    public function getDeleteProduct($id){
        Product::destroy($id);
        return back();
    	
    }



}
