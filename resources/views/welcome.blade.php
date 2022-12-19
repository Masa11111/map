<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Googleマップ</title>
</head>
<body>
    <div id="map" style="height: 500px; width: 500px; margin: auto;"></div>
    <script src="{{ asset('/js/map.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDx5HjkvxjG8_Csdws8tuXjI_qNRLsjWEc&callback=initMap"></script></body>
</html>