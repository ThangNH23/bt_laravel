<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\products;
use App\Models\slide;
use App\Models\bill_detail;
use App\Models\type_products;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
  
    public function getIndex(){	
        $slide = Slide::all();		
        $new_product=products::where('new', 1)->paginate(8);
        $sanpham_khuyenmai=products::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide', 'new_product','sanpham_khuyenmai'));	
    }		
    public function getLoaiSp($type){
        $type_product = products::all();
        $sp_theoloai = products::where('id_type',$type)->get();
        $sp_khac = products::where('id_type','<>',$type)-> get();

        $loai = type_products::all();

        $loai_sp = type_products::where('id',$type)->first();
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac','loai','loai_sp'));
    }	
    public function getDetail( Request $request){
        $sanpham= products:: where ('id', $request-> id)->first();
        $splienquan=products::where('id','<>', $sanpham->id, 'and', 'id_type', '=', $sanpham->id_type,)->paginate(3);
        $comments=comments::where ('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan', 'comments'));}


    // public function getLoaiSp() {
    //     return view('page.loai_sanpham');
    // }
    // public function getChitiet() {
    //     return view ('page.chitiet_sanpham');
    // }
    // public function getLienhe() {
    //     return view ('page.lienhe');
    // }

    public function getIndexAdmin(){
        $product = products::all();
        return view('pageadmin.admin')->with(['product'=>$product,'sumSold'=>count(bill_detail::all())]);
     }
     public function getAdminAdd(){
        return view('pageadmin.formAdd');
     }
    
    public function postAdminAdd(Request $request)
    {
        $product = new products();
    
        if ($request->hasFile('inputImage')) {
            $file = $request->file('inputImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }
    
        $product->name = $request->inputName;
        $product->description = $request->inputDescription;
        $product->unit_price = $request->inputPrice;
        $product->promotion_price = $request->inputPromotionPrice;
        $product->unit = $request->inputUnit;
        $product->new = $request->inputNew;
        $product->id_type = $request->inputType;
        $product->save();
        return $this->getIndexAdmin();
    }

    public function getAdminEdit($id)
{
 $product = products::find($id);
 return view('pageadmin.formEdit')->with('product', $product);
}
    
    public function postAdminEdit(Request $request)
    {
        $id = $request->editId;
        $product = products::find($id);
    
        if ($request->hasFile('editImage')) {
            $file = $request->file('editImage');
            $fileName = $file->getClientOriginalName();
            $file->move('source/image/product', $fileName);
            $product->image = $fileName;
        }

        if ($request -> file('editImage')!=null){
            $product -> image = $fileName;
        }
    
        $product->name = $request->editName;
        $product->description = $request->editDescription;
        $product->unit_price = $request->editPrice;
        $product->promotion_price = $request->editPromotionPrice;
        $product->unit = $request->editUnit;
        $product->new = $request->editNew;
        $product->id_type = $request->editType;
        $product->save();
        return $this->getIndexAdmin();
    }

    


public function postAdminDelete($id){
    $product = products::find($id);
    $product-> delete();
    return $this -> getIndexAdmin();

}}


