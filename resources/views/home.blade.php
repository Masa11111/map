@extends('layouts.master')
@section('title', '求人マップ')
@section('header_navigation')

<li class="nav-item active">
    <a class="nav-link" href="/">ホーム</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="">求人マップとは</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="">オーナー様はこちら</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="">コンタクト</a>
</li>

@endsection
@section('search')

<div class="container mt-5">
    <form class="row g-3">
        <div class="col-md-3">
            <label for="inputArea" class="form-label">希望のエリア</label>
            <select id="inputArea" name="inputArea" class="form-select">
                <option selected>選択</option>
                <option value="f01">福岡市</option>
                <option value="f02">博多区</option>
                <option value="f03">中央区</option>
                <option value="f04">早良区</option>
                <option value="f05">東区</option>
                <option value="f06">西区</option>
                <option value="f07">南区</option>
                <option value="f08">城南区</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputStation" class="form-label">駅から選択</label>
            <select id="inputStation" name="inputStation" class="form-select">
                <option selected>選択</option>
                <option></option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputOccupation" class="form-label">職種を選択</label>
            <select id="inputOccupation" name="inputOccupation" class="form-select">
                <option selected>選択</option>
                <option>飲食</option>
                <option>アパレル</option>
                <option>軽作業</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="inputSalary" class="form-label">時給</label>
            <select id="inputSalary" name="inputSalary" class="form-select">
                <option selected>選択</option>
                <option>900円以上</option>
                <option>950円以上</option>
                <option>1000円以上</option>
                <option>1100円以上</option>
            </select>
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">キーワードで探す</label>
            <input type="text" class="form-control" name="inputKeyword" id="inputAddress2" placeholder="居酒屋、〇〇店">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success w-50">検索</button>
        </div>
    </form>
</div>

@endsection

@section('map')

<div class="container mt-5">
    <div id="map" style="height: 60vh; width: 100%;"></div>
    <script src="{{ asset('/js/map.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx5HjkvxjG8_Csdws8tuXjI_qNRLsjWEc&callback=initMap"></script>
    </body>
</div>


@endsection('')