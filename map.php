
<style>
      #map {
        width: 100%;
        height: 97%;
       
 

      }
    </style>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>
    <script>
      // 1. The basic part of the example
      var L;

      window.onload = function() {
        L.mapquest.key = 'XWhwhMU9GeXmeAXbozNE5VvAZc2b4Kkn';

        // 'map' refers to a <div> element with the ID map
        var map = L.mapquest.map('map', {
          center: [18.0241727,-76.7394056,],
          layers: L.mapquest.tileLayer('hybrid'),
          zoom: 11

        });
        L.mapquest.textMarker([18.0241727,-76.7394056,], {
     text: 'VTDI',
     subtext: 'Best college in Jamaica!',
     position: 'right',
     type: 'marker',
     icon: {
     primaryColor: 'ED2939',
     secondaryColor: 'ED2939',
     size: 'sm'
  }
}).addTo(map);
   
      }

      
    </script>
    </head>
    
        



   

    <div id="map"></div>
