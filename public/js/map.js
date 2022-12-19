function initMap() {
  map = document.getElementById("map");
  if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(
          (position) => {
            const pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };
            // マップインスタンスを表示
            const mapObj = new google.maps.Map(map, {
              zoom: 16,
              center: pos,
              mapId: '4504f8b37365c3d0',
            });
            //現在位置のマーカーを追加
            const marker = new google.maps.Marker({
              position: pos,
              map: mapObj,
            })
          },
          () => {
            handleLocationError(true, infoWindow, mapObj.getCenter());
          },
      );
  }else{
      handleLocationError(false, infoWindow, mapObj.getCenter());
  }
}


