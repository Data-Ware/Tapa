@extends('layouts.default')

@section('content');

<div id="main">
    <p class="statement">at tapa we use the best, freshest ingredients and pride ourselves on serving a great coffee every time!</p>
    <div style="margin-left: 45px;">
        <div id="featured"> 
			<div class="content" style="">	</div>
			 <?php 
             $i = 1;
             for ($i = 1; $i <= 17; ++$i):?>
                  
                	<img src="pix/cafe/c<?php echo $i;?>.jpg" width="564px" height="386px"> 
                
            <?php endfor;?>
            
        </div>
        </div>
     </div><!-- end main  -->



<!-- load the orbit function -->
<script type="text/javascript">
    $(window).load(function() {
        $('#featured').orbit({
            animation: 'fade',
            animationSpeed: 1000,
            bullets: true,
            bulletThumbs: false
            
            
        });
                
    });
</script>
@stop