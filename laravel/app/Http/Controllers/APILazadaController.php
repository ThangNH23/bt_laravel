<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\lazada;
use Illuminate\Http\Request;

class APILazadaController extends Controller
{
    public function getProducts()
    {
        $lazada = lazada::all();
        return response()->json($lazada);
    }
    public function getOneProduct($id)
    {
        $lazada = lazada::find($id);
        return response()->json($lazada);
    }
    public function addProduct(Request $request)
    {
        $lazada = new lazada();
        $lazada->name = $request->input('name');
        $lazada->image = $request->input('image');
        $lazada->price = $request->input('price');
        $lazada->shop_owner = $request->input('shop_owner');
        $lazada->save();
        return $lazada;
    }
    public function deleteProduct($id)
    {
        $lazada = lazada::find($id);
        $fileName = './source/image/product/' . $lazada->image;
        if (File::exists($fileName)) {
            File::delete($fileName);
        }
        $lazada->delete();
        return ['status' => 'ok', 'msg' => 'Delete successed'];
    }
    public function editProduct(Request $request, $id)
    {
        $lazada = lazada::find($id);

        $lazada->name = $request->input('name');
        $lazada->image = $request->input('image');
        $lazada->price = $request->input('price');
        $lazada->shop_owner = $request->input('shop_owner');

        $lazada->save();
        return response()->json(['status' => 'ok', 'msg' => 'Edit successed']);
    }

    public function uploadImage(Request $request)
    {
        // process image							
        if ($request->hasFile('uploadImage')) {
            $file = $request->file('uploadImage');
            $fileName = $file->getClientOriginalName();

            $file->move('./source/image/product', $fileName);

            return response()->json(["message" => "ok"]);
        } else return response()->json(["message" => "false"]);
    }
}
