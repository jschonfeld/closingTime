<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="closing_time.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyB6IgqzEzPeXmS7ETftJZLXRkMQroUqFK4&sensor=false'></script>
</head>
<body>
        <div id="search_area">
        <div id="inner">
            <img  src="logo5.png" style="float:left;" />
            <form  method='POST'>
               <input type="text" id='zip' name='zipcode' placeholder="Enter a location" class="location_field push_4" required>
               <input type="button" value="Submit" class="push_4" id="submit">
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="category_bar">
        <div id="category_list"> <span class="category" id="food">Food</span>
 <span class="category" id="health_home">Health and Home</span>
 <span class="category" id="finance">Finance</span>
 <span class="category" id="gas">Auto and Gas</span>
 <span class="category" id="retail">Retail</span>

        </div>
    </div>
    <div class="container_12">
        <div class="clear"></div>
        <div class="grid_7" id="result_tab">
         
        </div>
        <div class="grid_5" id="info_panel">
           <h3 id="location_header"></h3>
           <div id="map_canvas"></div>
        </div>
    </div>
    <div id="footer">Closing Time 2013, Yehuda Schonfeld | Reuben Moddel </div>
    <div class="clear"></div>

<script>

//Redirect the enter button:

//Bind this keypress function to all of the input tags
		$("input").keypress(function (evt) {
//Deterime where our character code is coming from within the event
          var charCode = evt.charCode || evt.keyCode;
                  if (charCode  == 13) { //Enter key's keycode
                  $('#submit').trigger('click');
                  return false;
                    }
		});

             $("#submit").click(function(){
		$('#result_tab').empty();
		var address = $('#zip').val();
		if(!address.length){return false;}
                if($.isNumeric(address) && !address.toString().length == 5)
		{alert("Please enter a valid zip");return false;}
		$.post('create_map.php',
			{address: address}, function(data){
                        var temp = data.split('@');
			var lat = temp[0];
			var long = temp[1];
                        var location = temp[2];
                        console.log(data);
                        $('#location_header').html(location);
			$('#map_canvas').html('').css('height', '550px');
			initialize(lat,long);
			/*$(data).each(function(k,v){        
				$('<img>',{
				title:v.title,
				src:v.img
				}).appendTo($('#result_tab'));

			 });*/
			}
			);
                }); 

////////////***************************//////////////
// This function get all the maps .
function initialize(lat,long){//,address) {
    myLatlng = new google.maps.LatLng(lat,long),
        myOptions = {
            center: myLatlng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(document.getElementById('map_canvas'),myOptions),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            //title:address
        });
}

////////////***************************//////////////

// Click a category

//Clear the result_tab
$('.category').click(function(){
        $('#result_tab').empty();
});

//get any data
	$('.category').click(function(){
       var id = $(this).attr('id'),
               zip = $('#zip').val();
       $.getJSON('curl-test.php',{category:id,zip:zip},function(data){
               console.log(data.results);
       });
});



</script>

 
</body>
</html>			
