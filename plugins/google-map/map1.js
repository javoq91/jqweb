function iniciarMap(){
  var coord = {lat:-25.3123893 ,lng: -57.5197016};
  var map = new google.maps.Map(document.getElementById('map'),{
    zoom: 10,
    center: coord
  });
  var marker = new google.maps.Marker({
    position: coord,
    map: map
  });
}
