//set map options
var myLatlng = {lat: 51.5, lng:-0.1};
var mapOptions = {
    center: myLatlng,
    zoom:7,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

//create map
var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();
//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();
//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);

//define calcRoute function
function calcRoute(){
    //create a request
    var request = {
        origin: document.getElementById('from').value,
        destination: document.getElementById('to').value,
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.IMPERIAL
    };
    //pass the request to the route method
    directionsService.route(request, function(result, status){
        if(status==google.maps.DirectionsStatus.OK){
           
            //get distance and time
            $('#output').html("<div class='alert-info'>From: "+document.getElementById('from').value+".<br />To: "+document.getElementById('to').value+".<br />Driving distance: "+result.routes[0].legs[0].distance.text+".<br />Duration: "+result.routes[0].legs[0].duration.text+".</div>");
            
            //display route
            directionsDisplay.setDirections(result);
        }else{
            //if status is not ok
                //delete route from the map
            directionsDisplay.setDirections({routes:[]});
                //center the map in London
            map.setCenter(myLatlng);
            //show error message 
            $('#output').html("<div class='alert-danger'>Could not retrieve driving distance.</div>");
        }
    });
}

//create autocomplete objects for all inputs
//create autocomplete object
var input1 = document.getElementById('from');
var input2 = document.getElementById('to');
var options = {
    types:['(cities)']
};
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);







