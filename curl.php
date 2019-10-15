<?php
// echo "<table border='1' class='mainhati'>";
// $url = 'http://gilabola.com/internasional/jadwal-bola-malam-ini/';
// $content = file_get_contents($url);
// $first_step = explode( '<tbody class="row-hover">' , $content );
// $second_step = explode("</tbody>" , $first_step[1] );
// $text1 = $second_step[0];
// echo $text1;
// echo "</table>";
// 
?>

<div  id='map'  style='height:380px;'  />  
<link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />  
<script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>  
  
<script>
var yourUrl = 'https://api.waqi.info/feed/pekanbaru/?token=ec5f593741128eea9cf875ffe9ac9fb47bf753ef';
let jsondata;    
fetch(yourUrl).then(
        function(u){ return u.json();}
      ).then(
        function(json){
          jsondata = json;
          alert(jsondata);
        }
      )
    //   var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';  
    //   var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';  
    //   var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});  
  
    //   var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=ec5f593741128eea9cf875ffe9ac9fb47bf753ef";  
    //   var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';  
    //   var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});  
  
    //   var  map  =  L.map('map').setView([51.505,  -0.09],  11);  
    //   map.addLayer(osmLayer).addLayer(waqiLayer);  
</script>



