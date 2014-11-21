@extends('layouts.master')

@section('content');
<body  onload="initialize()">
<div id= "catercont">
<link rel="stylesheet" href="css/contact_form.css">

<!-- <head> -->
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->


 
<div class="catertxt">
  <h1 style="margin-top: -5px;">contact us</h1>
  <div style="width: 452px; background-color: #666; overflow: hidden;">
  <div id="map_canvas" style="width:430px; height:250px; z-index: 1000; border: 10px solid #FFF; margin: 1px auto; margin-bottom: 1px; margin-left:  1px; margin-right: 1px;"></div></div>
  <p style="width: 450px">Need help or can't find what you are looking for in 
      the menu - simply fill in the form to email us your enquiry or call us to discuss further.</p>
  <div class="TTWForm-container">
        
        
       <form action="data/process_form.php" class="TTWForm ui-sortable-disabled" method="post"
       novalidate="">
             
             
            <div id="name-container" class="field f_100 ui-resizable-disabled ui-state-disabled">
                 <label for="name-container">
                      Name
                 </label>
                 <input name="name" id="name-container" required="required" type="text" placeholder="enter your name">
            </div>
             
             
            <div id="email-container" class="field f_100 ui-resizable-disabled ui-state-disabled">
                 <label for="email-container">
                      Email Address
                 </label>
                 <input name="email" id="email-container" required="required" type="email" placeholder="your.email@email.com">
            </div>
             
             
            <div id="message-container" class="field f_100 ui-resizable-disabled ui-state-disabled">
                 <label for="message-container">
                      Message/enquiry
                 </label>
                 <textarea rows="5" cols="20" name="message" id="message-container" required="required"></textarea>
            </div>
             
             
            <div id="form-submit" class="field f_100 clearfix submit">
                 <input value="contact" type="submit">
                 
            </div>
       </form>
  </div>
     
</div>
</div><!-- End container -->
<script type="text/javascript">
  function initialize() 
  {
    var latlng = new google.maps.LatLng(-37.821116771392674,  145.0233973860577);
    var myOptions = 
    {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var marker = new google.maps.Marker(
    {
      position: latlng, 
      map: map, 
      animation: google.maps.Animation.DROP,
      title:"Tapa Cafe!",
      
    });
  }
  </script>
@stop