@extends('layouts.master')
@section('title', '登録内容確認')
@section('content')

<div class="container mt-5">
    <form action="" method="post" class="w-50" style="margin-left: auto; margin-right: auto;">
        {{csrf_field()}}
        <!-- データベースに送信するデータ -->
        <input type="hidden" name="Occupation" value="{{$Occupation}}">
        <input type="hidden" name="Genre" value="{{$Genre}}">
        <input type="hidden" name="shopName" value="{{$shopName}}">
        <input type="hidden" name="phoneNumber" value="{{$phoneNumber}}">
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="postCode" value="{{$postCode}}">
        <input type="hidden" name="address" value="{{$address}}">
        <input type="hidden" name="longitude" value="{{$longitude}}">
        <input type="hidden" name="latitude" value="{{$latitude}}">
        <input type="hidden" name="comment" value="{{$comment}}">
        <input type="hidden" name="password" value="{{$password}}">

        <!-- 登録内容を表示 -->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">職種</label>
            <div class="col-sm-6">{{$Occupation}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">ジャンル</label>
            <div class="col-sm-6">{{$Genre}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">店名</label>
            <div class="col-sm-6">{{$shopName}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">郵便番号</label>
            <div class="col-sm-6">{{$postCode}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">住所</label>
            <div class="col-sm-6">{{$address}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">緯度</label>
            <div class="col-sm-6">{{$longitude}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">経度</label>
            <div class="col-sm-6">{{$latitude}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">紹介内容</label>
            <div class="col-sm-6">{{$comment}}</div>
        </div>
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">パスワード</label>
            <div class="col-sm-6">{{$password}}</div>
        </div>
        <div class="form-group row mt-5">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-dark btn-block">登録</button>
            </div>
        </div>
    </form>
</div>

@endsection