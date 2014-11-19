@extends('layouts.default')

@section('content');

        
        <div class="catertxt">
        <img class="pagepic" src="pix/site/aboutpix.jpg" width="580px" height="150px" />
           <p>Tapa is a small and friendly cafe and caterer in Hawthorn. We welcome you with a smile and friendly hello, we love that we usually know your name and you know ours, we know your coffee, what you like and often what you don't.</p>
            
            <p>The majority of our customers we see every day but whether you are a 'regular' or an 'irregular' we hope to provide a sanctuary, if but for a brief moment in your day when you are enveloped by pleasant sights, sounds, smells and tastes - and you feel special!</p>
            
            <p>We pride ourselves on providing fresh food, made with quality ingredients on the premises every day. Early in the morning you will be greeted with the smell of warm muffins as they come out of the oven, freshly ground coffee beans or the smell of fresh meats roasting ready for lunch. Our chefs start early in the morning to ensure our meats are roasted in time for lunch and that our cakes and slices are baked fresh - just like mum used to make them! The only thing we don't make is our own bread - that's because we think our bakers do it better!</p>
          


        </div><!-- end tapatext -->
    
    
    

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