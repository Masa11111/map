@extends('layouts.master')
@section('title', '求人情報入力')
@section('header_navigation')

<li class="nav-item active">
    <a class="nav-link" href="/">ホーム</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/admin/search">店舗検索</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/admin/view">店舗一覧</a>
</li>

@endsection
@section('content')

<!-- 職種、ジャンル、店名、コメント、電話番号、住所、緯度、経度を入力するフォーム -->
<div class="container mt-5">
    <form class="row" action="" method="post" class="needs-validation" novalidate>
        @method('patch')
        {{ csrf_field() }}
        <div class="col-md-6">
            <label for="inputOccupation" class="form-label">職種</label>
            <select name="Occupation" id="inputOccupation" class="form-select @if($errors->has('Occupation')) is-invalid @endif" required>
                <option value="" hidden>未選択</option>
                <option value="飲食" @if(old('Occupation')==="飲食" ) selected @endif>飲食</option>
            </select>
            @error('inputOccupation')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputGenre" class="form-label">ジャンル</label>
            <select name="Genre" id="inputGenre" class="form-select @if($errors->has('Genre')) is-invalid @endif" required>
                <option value="" hidden>未選択</option>
                <option value="定食" @if(old('Occupation')==="定食" ) selected @endif>定食</option>
                <option value="居酒屋" @if(old('Occupation')==="居酒屋" ) selected @endif>居酒屋</option>
                <option value="イタリアン" @if(old('Occupation')==="イタリアン" ) selected @endif>イタリアン</option>
                <option value="フレンチ" @if(old('Occupation')==="フレンチ" ) selected @endif>フレンチ</option>
                <option value="ファストフード" @if(old('Occupation')==="ファストフード" ) selected @endif>ファストフード</option>
            </select>
            @error('inputGenre')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="col-12 g-3">
            <label for="inputName" class="form-label">店名</label>
            <input name="shopName" value="{{ old('shopName') }}" type="text" class="form-control @if($errors->has('shopName')) is-invalid @endif" id="inputName" placeholder="〇〇店" required>
            @error('shopName')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputPhoneNumber" class="form-label">電話番号</label>
                <input type="text" value="{{ old('phoneNumber') }}" name="phoneNumber" class="form-control @if($errors->has('phoneNumber')) is-invalid @endif" id="inputPhoneNumber" placeholder="電話番号" required>
                @error('phoneNumber')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">メールアドレス</label>
                <input type="text" value="{{ old('email') }}" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="inputEmail" placeholder="メールアドレス" required>
                @error('emial')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm">
                住所登録
            </div>
        </div>
        <div class="row g-3">
            <div class="col-sm">
                <input name="postCode" value="{{ old('postCode') }}" type="text" class="form-control @if($errors->has('postCode')) is-invalid @endif" placeholder="郵便番号" aria-label="Zip" required>
                @error('postCode')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-8">
                <input name="address" value="{{ old('address') }}" type="text" class="form-control @if($errors->has('address')) is-invalid @endif" placeholder="住所" aria-label="State" required>
                @error('address')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-6">
                <label for="inputLng" class="form-label">緯度(８桁まで)</label>
                <input name="longitude" value="{{ old('longitude') }}" type="number" step="0.00001" class="form-control @if($errors->has('longitude')) is-invalid @endif" required>
                @error('longitude')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="inputLat" class="form-label">経度(８桁まで)</label>
                <input name="latitude" value="{{ old('latitude') }}" type="number" step="0.00001" class="form-control @if($errors->has('latitude')) is-invalid @endif" required>
                @error('latitude')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="row g-3">
            <label for="inputComment" class="form-label">紹介内容</label>
            <textarea name="comment" value="{{ old('comment') }}" type="text" class="form-control" id="inputComment" rows="3"></textarea>
        </div>
        <div class="row g-3">
            <label for="inputPassword" class="form-label">パスワード</label>
            <input type="password" name="password" value="{{ old('password') }}" class="form-control @if($errors->has('password')) is-invalid @endif" id="inputPassword" required>
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row g-3 col-6">
            <button type="submit" class="btn btn-dark btn-lg">登録</button>
        </div>
    </form>
</div>

@endsection