<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // 店舗登録
    public function adminSignUpView()
    {
        return view('admin');
    }

    public function adminConfirm(\App\Http\Requests\StoreShopRequest $req)
    {
        $data = $req->all();
        return view('admin_confirm')->with($data);
    }

    public function adminSignUp(Request $request)
    {
        $shop = new \App\Models\Shop();

        $shop->occupation = $request->Occupation;
        $shop->genre = $request->Genre;
        $shop->shopName = $request->shopName;
        $shop->phone_Number = $request->phoneNumber;
        $shop->email = $request->email;
        $shop->address = $request->address;
        $shop->langitude = $request->longitude;
        $shop->latitude = $request->latitude;
        $shop->comment = $request->comment;
        $shop->password = $request->password;

        $shop->save();

        return redirect('/admin/view');
    }

    // 店舗一覧表示
    public function adminView()
    {
        $query = \App\Models\Shop::query();
        $shops = $query->orderBy('id')->paginate(10);
        return view('admin_view', ['shops' => $shops]);
    }

}
