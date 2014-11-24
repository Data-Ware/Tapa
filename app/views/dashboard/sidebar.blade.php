 <div id="sside" class="col-lg-3">
	<ul>
		<li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
			
	  <li><a href="{{URL::to('items')}}">Items</a></li>
		
		@if(Auth::user() && (Auth::user()->role_id == '1' ))
		<li><a href="{{URL::to('categorie')}}">Categorie</a></li>
		<li><a href="{{URL::to('block')}}">Block</a></li>
		<li><a href="{{URL::to('blockheader')}}">Block_header</a></li>
		<li><a href="{{URL::to('imgs')}}">Gallery</a></li>
		<li><a href="{{URL::to('users')}}">Accounts</a></li>
		@endif
    
	</ul>
</div>

