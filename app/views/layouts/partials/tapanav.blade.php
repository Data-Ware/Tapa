 <!-- Lets get the current page so we can use it to style up the navigation -->
<!-- Navigation pages TAPA-->
<div id="nav_item">
	<ul> 
		<li><a href= "/tapa/public/" class=" {{ Request::is('/') ? 'current' : '' }}" >home</a></li>
		<li><a href= "/tapa/public/about" class=" {{ Request::is('about') ? 'current' : '' }}" >about</a></li>
		<li><a href= "/tapa/public/cafe" class=" {{ Request::is('cafe') ? 'current' : '' }}" >cafe</a></li>
		<li><a href= "/tapa/public/catering" class=" {{ Request::is('catering') ? 'current' : '' }}" >catering</a></li>
		<li><a href= "/tapa/public/contact" class=" {{ Request::is('contact') ? 'current' : '' }}" >contact</a></li>
		

	</ul>
</div>
