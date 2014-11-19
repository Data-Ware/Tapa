@extends('layouts.master')

@section('content');

<!-- <link rel="stylesheet" href="css/contact.css">-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>


<div id='contact-form' class="catertxt menu">
    <p>Fresh ingredients and quality produce cooked in-house by our experienced chefs - that's why our catering looks and tastes so good!</p>
    <p>Browse through our delicious range from the menu selection below. Or, you can download the <a href="pdfs/catering menu March 2011.pdf">catering menu here.</a></p>
    <p>Then it's as simple as clicking on the link to <a href="#"class='contact'>email your order</a>.</p>
    <p>Need help or can't find what you are looking for in
    the menu - simply fill in the form to <a href= "#" class='contact'>email us</a> your enquiry or call us to discuss further.
    We pride ourselves on being flexible and work with you to meet your catering needs.</p>
    <p>We deliver anywhere in the Hawthorn area.</p>
</div>

    @include( 'catering.blocks' )


 <script>
     $(document).ready(function(){

      //Set default open/close settings
         $('.acc_container').hide(); //Hide/close all containers
         //$('.acc_trigger:first').next().hide(); //Add "active" class to first trigger, then show/open the immediate next container

         //On Click
         $('.acc_trigger').click(function(){
            if( $(this).next().is(':hidden') ) { //If immediate next container is closed...
                $('.acc_trigger').removeClass('active').next().slideUp('slow'); //Remove all "active" state and slide up the immediate next container
                $(this).toggleClass('active').next().slideDown('slow'); //Add "active" state to clicked trigger and slide down the immediate next container
            }
            return false; //Prevent the browser jump to the link anchor
         });

     });
 </script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/contact.js'></script>

@stop