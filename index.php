<!DOCTYPE html>
<html> 
esto seria una prueba para hacer un merge
este seria el test del test_merge_1
<head> 
   <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
   <title>Google Maps API v3 Directions Example</title> 
   <script type="text/javascript" 
           src="http://maps.google.com/maps/api/js?sensor=false"></script>
</head> 
<body style="font-family: Arial; font-size: 12px;"> 
   <div style="width: 600px;">
     <div id="map" style="width: 280px; height: 400px; float: left;"></div> 
     <div id="panel" style="width: 300px; float: right;"></div> 
   </div>

   <script type="text/javascript"> 

     var directionsService = new google.maps.DirectionsService();
     var directionsDisplay = new google.maps.DirectionsRenderer();

     var map = new google.maps.Map(document.getElementById('map'), {
       zoom:7,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });

     directionsDisplay.setMap(map);
     directionsDisplay.setPanel(document.getElementById('panel'));

     var request = {
       origin: '33445', 
       destination: '90006',
       travelMode: google.maps.DirectionsTravelMode.DRIVING
     };

     directionsService.route(request, function(response, status) {
       if (status == google.maps.DirectionsStatus.OK) {
         directionsDisplay.setDirections(response);
       }
     });
   </script>
   esto seria una prueba de conflicto 3
</body> 
</html>