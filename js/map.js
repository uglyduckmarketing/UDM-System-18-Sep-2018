var image = {
url: 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Map_marker.svg/1000px-Map_marker.svg.png',
scaledSize : new google.maps.Size(30, 44)
};
var infowindow = new google.maps.InfoWindow();


function initMap() {
  var LatLng = {lat: 35.374892, lng: -119.106054};

  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: LatLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    mapTypeControl: false,
    styles:
    [{"featureType":"administrative","elementType":"all","stylers":[{"color":"#5a666c"},{"invert_lightness":true},{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#5a666c"},{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"color":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-91"},{"lightness":"-46"},{"visibility":"on"},{"hue":"#00aaff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#3b444a"},{"visibility":"on"}]}]
  });

  var marker = new google.maps.Marker({
    position: LatLng,
    map: map,
    icon: image,
    title: 'Hello World!'
  });

} google.maps.event.addDomListener(window, 'load', initMap);
