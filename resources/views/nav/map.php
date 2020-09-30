<div class="app-footer__connect-map">

	<div id="map" class="map"></div>

    <script>

    var map;
      
    function initMap() {

		  // Create an array of styles.
		  var styles = [
		    {
		      stylers: [
		        { hue: "#193F57" },
		        { saturation: -79 }
		      ]
		    }
		  ];

		  // Create a new StyledMapType object, passing it the array of styles,
		  // as well as the name to be displayed on the map type control.
		  var styledMap = new google.maps.StyledMapType(styles,
		    {name: "Styled Map"});

		 


		  // Create a map object, and include the MapTypeId to add
		  // to the map type control.
		  var mapOptions = {
		    zoom: 14,
		    center: new google.maps.LatLng(40.690146, -111.545456), 
		    mapTypeControl: false,
		    scrollwheel: false,
		    mapTypeControlOptions: {
		      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		    }
		  };


		  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

		  //Associate the styled map with the MapTypeId and set it to display.
		  map.mapTypes.set('map_style', styledMap);
		  map.setMapTypeId('map_style');



            var image = 'https://www.dropbox.com/s/0h43i9zi9327pc8/sotm-pin.svg?raw=1';

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.690146, -111.545456),
                map: map,
                icon: image,
                title: 'Spigot Design'
            });

            google.maps.event.addListener(marker, 'click', function() {
                window.open('https://goo.gl/maps/2h4drhsoZxTnHPxg9');
            });



	}
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCzC9tE2J_TLOIRQmhsLIyCqPAEDV2OQ8&callback=initMap"></script>

	</div>