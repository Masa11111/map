@extends('layouts.master')
@section('title', "店舗一覧")
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
<li class="nav-item">
    <a class="nav-link" href="/admin/signUp">店舗登録</a>
</li>

@endsection

@section('content')
<div class="container mt-5 mb-5">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th class="col-1">職種</th>
                <th class="col-1">ジャンル</th>
                <th class="col-2">店舗名</th>
                <th class="col-1">電話番号</th>
                <th class="col-3">住所</th>
                <th class="col-1"></th>
                <th class="col-1"></th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
            <tr>
                <th scope="row">{{$shop->id}}</th>
                <td>{{$shop->occupation}}</td>
                <td>{{$shop->genre}}</td>
                <td>{{$shop->shopName}}</td>
                <td>{{$shop->phone_Number}}</td>
                <td>{{$shop->address}}</td>
                <td><a href=""><button type="button" class="btn btn-success">詳細</button></a></td>
                <td><a href=""><button type="button" class="btn btn-primary">編集</button></a></td>
                <td>
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger btn-dell" value="削除">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$shops->links()}}
</div>
@endsection