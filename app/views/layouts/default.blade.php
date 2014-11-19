<!-- This is the home page for TAPA CAFE -->
@include("layouts.partials.header")
<div id= "container">

@include("layouts.partials.tapanav")
@include("layouts.partials.tapasidebar")

	@yield('content')

</div>

</div>

@include("layouts.partials.footer")