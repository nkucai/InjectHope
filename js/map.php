<script>
var latitude = 0;
var longitude = 0;

function initialize() {

  var mapProp = {
    center:new google.maps.LatLng(window.latitude, window.longitude),
    zoom:12,
    disableDefaultUI: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };

  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var latlngbounds = new google.maps.LatLngBounds();

  <?php foreach($locations as $location) : ?>
    var myLatLng = new google.maps.LatLng(<?php echo $location['latitude'] ?>, <?php echo $location['longitude'] ?>);
    var name = "<?php echo $location['name'] ?>";
    var address = "<?php echo $location['address1'] ?>";
    var website = "<?php echo $location['website'] ?>";
    var city = "<?php echo $location['city'] ?>";
    var state = "<?php echo $location['state'] ?>";
    var zip = "<?php echo $location['zipcode'] ?>";
    addMarkers(myLatLng, map, name, address, city, state, zip);
    //latlngbounds.extend(myLatLng);
  <?php endforeach; ?>

    var bounds = new google.maps.LatLngBounds();
    //map.setCenter(latlngbounds.getCenter());
    //map.fitBounds(latlngbounds);


/*----------------SEARCH BOX FEATURE IN PROGRESS----------------------------------------
    // Create the search box and link it to the UI element.
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener('bounds_changed', function() {
        searchBox.setBounds(map.getBounds());
    });

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener('places_changed', function() {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }
            var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
            }));

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });

-------------------------------------------------------------------------------------------------------------*/

//------------------------------------------------------------------------------------------------------------
    //Use geolocation coords to show user location
    var userMarker = new google.maps.Marker({
        position: {lat: window.latitude, lng: window.longitude},
        map: map,
        icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
    });

    //Display you are here over top of userMarker
    var userMarkerMessage = {
        content: 'You are here'
    };

    var userMarkerWindow = new google.maps.InfoWindow(userMarkerMessage);
    userMarker.addListener('click', function() {
        userMarkerWindow.open(map, userMarker);
    });
//------------------------------------------------------------------------------------------------------------

}



function addMarkers(location, map, name, address, city, state, zip){
  //var myLatLng = {lat: -51.308742, lng: -0.120850};
    var contentString = ('<h3>' + name + '</h3>' +
            '<h4>' + address + '<br>' +
            city + ', ' + state + ' ' + zip + '</h4>' +
           '<h4><a href="http://maps.apple.com/?daddr=' + address + ',' + city + ',' + state + ',&t=m" target=_blank>Directions</h4>');

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: "Provider"
  });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    })

}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(setPosition);
    }
    else {
        $('#geoLocationStatus').html("Error: Geolocation is not supported by this browser.");
    }
}


function setPosition(position) {
	window.latitude = position.coords.latitude;
	window.longitude = position.coords.longitude;
    myLat = position.coords.latitude;
    myLong = position.coords.longitude;
	initialize();
}


</script>


