<!DOCTYPE html>
<html>
  <head>
    <title>Location Picker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUEYSHpgFDIWkRSZdoVRX5jGWj_fCQ71w"></script>
    <script>
      var map;
      var marker;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });

        google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng);
        });
      }

      function placeMarker(location) {
        if ( marker ) {
            marker.setPosition(location);
        } else {
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        document.getElementById("latitude").value = location.lat();
        document.getElementById("longitude").value = location.lng();
      }
    </script>
  </head>
  <body onload="initMap()">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div id="map" style="height:500px;"></div>
        </div>
        <div class="col-md-6">
          <form action="{{ url('ordersave') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="address_1" id="name">
                <label for="name">Name</label>
                <span class="input-highlight"></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address_2" id="email">
                <label for="email">Email</label>
                <span class="input-highlight"></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="city" id="phone">
                <label for="subject">City</label>
                <span class="input-highlight"></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="state" id="phone">
                <label for="subject">State</label>
                <span class="input-highlight"></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="zip" id="phone">
                <label for="zip">Zip</label>
                <span class="input-highlight"></span>
            </div>
            <div class="form-group">
              <label for="latitude">Latitude</label>
              <input type="text" class="form-control" id="latitude" name="latitude" readonly>
            </div>
            <div class="form-group">
              <label for="longitude">Longitude</label>
              <input type="text" class="form-control" id="longitude" name="longitude" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Save Location</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
