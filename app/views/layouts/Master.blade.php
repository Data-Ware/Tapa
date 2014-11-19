<!-- This is the home page for TAPA CAFE -->
@include("layouts.partials.header")
<div id= "catercont">
<link rel="stylesheet" href="css/contact.css">
@include("layouts.partials.tapanav")
@include("layouts.partials.tapasidebar1")

	@yield('content')

</div>

@include("layouts.partials.footer") 
