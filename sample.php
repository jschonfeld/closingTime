<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="closing_time.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
</head>
<body>
    <div id="search_area">
        <div id="inner">
            <form action='yp-info.php' method='POST'>
            <input type="text" id='zip' name='zipcode' placeholder="Enter a location" class="location_field push_4">
            <input type="button" value="Submit" class="push_4" id="submit">
            </form>
        </div>
    </div>
    <div class="clear"></div>
    <div id="category_bar">
    <div id="category_list"> 
 <span class="category" id="food">Food</span>
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

            <div  id="sort_by">
               <span class="sorter" id="open_now">Open Now</span>
               <span class="sorter" id="opens">Opening Time</span>
               <span class="sorter" id="closes">Closing Time</span>
               <span class="sorter" id="distance">Distance</span>
           </div>

        </div>
		
		
        <div class="grid_7 push_1" id="click_to_slide">
           <div id="category_list">   
               <span class="day" id="sun">Sun</span>
               <span class="day" id="mon">Mon</span>
               <span class="day" id="tue">Tue</span>
               <span class="day" id="wed">Wed</span>
               <span class="day" id="thur">Thur</span>
               <span class="day" id="fri">Fri</span>
               <span class="day" id="sat">Sat</span>
           </div>
        </div>

     <div class="grid_7 push_1" id="slide_me_down"></div>
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
//////////////////////////////********************///////////////////////////
//Click Food to see a sample food result
$("#food").click(function(){
$('#result_tab').empty();
});
                $("#food").click(function(){
     $(function()             {$.getJSON('json-data.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                       /*$('<img>',{
                           class:v.open,
                           title:v.title,
                           src:v.img
                           
                                  })*/
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.open+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   
//////////////////////////////********************///////////////////////////
//Click finance to see a sample finance result (banks)
$("#finance").click(function(){
$('#result_tab').empty();
});
                $("#finance").click(function(){
     $(function()             {$.getJSON('banks.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                      
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.open+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   

//////////////////////////////********************///////////////////////////
//Sort the list by open now

$("#open_now").click(function(){
$('#result_tab').empty();
});
                $("#open_now").click(function(){
     $(function()             {$.getJSON('json-open_now.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){  
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.open+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });  

//////////////////////////////********************///////////////////////////
//Sort the list by closing time

$("#closes").click(function(){
$('#result_tab').empty();
});
                $("#closes").click(function(){
     $(function()             {$.getJSON('json-closes.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                       /*$('<img>',{
                           class:v.open,
                           title:v.title,
                           src:v.img
                           
                                  })*/
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.closes+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   
//////////////////////////////********************///////////////////////////
//Sort the list by opening time

//Click Submit to see a sample result
$("#opens").click(function(){
$('#result_tab').empty();
});
                $("#opens").click(function(){
     $(function()             {$.getJSON('json-opens.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                      
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.opens+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });   
//////////////////////////////********************///////////////////////////
//Sort the list by distance

$("#distance").click(function(){
$('#result_tab').empty();
});
                $("#distance").click(function(){
     $(function()             {$.getJSON('json-data.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                      
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.opens+'</figcaption>')
                                        .appendTo($('#result_tab'));

                                             })
                                     });
                               });
                        });

///////////////////**************************////////////////////////////////
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

/////////////////*******************///////////////
//Week div Slider controls:
$(document).ready(function () {
    $('.day').click(function () {
        var me = $(this);
        $('#slide_me_down').slideDown();
        if(me.hasClass('active')){
       		$('#slide_me_down').slideUp();
        	$(this).removeClass('active');
        }else{
            $('.active').removeClass('active');	
            $(this).addClass('active'); 
            $('#slide_me_down').html(me.attr('id'));
        }
    }); 
});
////////////////////*****************//////////////////
//Loading the weekly schedule into the Week slider Div


                $('.day').click(function(){
     $(function()             {$.getJSON('json-opens.php',{category: $('.location_field').val()}, function(data) {
                   $(data).each(function(k,v){        
                       /*$('<img>',{
                           class:v.open,
                           title:v.title,
                           src:v.img
                           
                                  })*/
                          $('<figure>').html('\
					<img class="'+v.open+'" title="'+v.title+'"  src="'+v.img+'" />\
					<figcaption>'+v.opens+'</figcaption>')
                                        .appendTo($('#slide_me_down'));

                                             })
                                     });
                               });
                        });   



</script>

</body>
</html>	
	
