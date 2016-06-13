<form name="app_post" method="post" action="" id="form_contact" onsubmit="myFunction()">
    <div id="app_post">
    	<div class="form-group">                
	    	<label class="control-label required" for="daily_usage">	Average Daily kW Use </label>
	    	<input type="number" id="daily_usage" name="daily_usage"  class="form-control" />
    	</div>
    	<div class="form-group">                
    		<label class="control-label required" for="address">Address</label>
    		<input type="text" id="address" name="address"  class="form-control"></textarea>
		</div>
		<div class="form-group"> 
			<label class="control-label required" >Building Type</label>               
			<div class="radio">
			  <label><input type="radio" name="optradio">Option 1</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="optradio">Option 2</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="optradio" >Option 3</label>
			</div>
		</div>
		<div class="form-group">                
			<label class="control-label required" for="persentage_solar">5.	Percentage (%) of their house they want to power with Solar / Renewables</label>
			<input type="number" id="persentage_solar" name="persentage_solar"  class="form-control" value="anna_admin@symfony.com" />
		</div>
		<div class="form-group">                
    		<label class="control-label required" for="name">Name</label>
    		<input type="text" id="name" name="name"  class="form-control">
		</div>
		<div class="form-group">                
    		<label class="control-label required" for="email">Email</label>
    		<input type="email" id="email" name="email"  class="form-control">
		</div>

		<div class="form-group">                
    		<label class="control-label required" for="contact">Contact</label>
    		<input type="text" id="contact" name="contact"  class="form-control">
		</div>
		<div id="locationField" class="form-group">
			<label class="control-label required" for="location">Your Location </label>
	      	<input id="autocomplete" placeholder="Enter  address" id="location" name="location" class="form-control"
	             onFocus="geolocate()" type="text"></input>
    	</div>
    	<input type="hidden" name="lat" id="lat">
    	<input id="form_submit" type="submit">
	</div>

    	
    </form>

 

    

    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
           
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }


    </script>
    <script type="text/javascript">
   //  	$(document).ready(function() {
    	
    
		 // $('#form_contact').submit(function(event){
		 // 	event.preventDefualt();
		 // 	alert("SUBMIT");
		 // 	return false;
		 // });

		
   //  	 });

	function myFunction(){
		lat = document.getElementById('lat').value = autocomplete.getPlace().geometry.location.lat();
	}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1JkCvBB-2ZLczJCaZwkQu1u6jHAGCxa0&libraries=places&callback=initAutocomplete"
        async defer></script>