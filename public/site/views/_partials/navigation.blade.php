	<div class="btn-group pull-right">
              <a class="btn btn-success" href="{{ URL::route('admin.login') }}"><i class="icon-lock icon-white"></i> Login</a>
	</div>	
		   <ul class="nav">
			  <li class="divider-vertical"></li><li><a href="{{ URL::route('home') }}"><i class="icon-home icon-white"></i> Home</a></li>
			  <li class="divider-vertical"></li><li><a href="{{ URL::route('page', 'about-us') }}"><i class="icon-user icon-white"></i> About us</a></li>
			  <li class="divider-vertical"></li><li><a href="{{ URL::route('article.list') }}"><i class="icon-globe icon-white"></i> Blog</a></li>
			  <li class="divider-vertical"></li><li><a href="{{ URL::route('page', 'contact') }}"><i class="icon-envelope icon-white"></i> Contact</a></li>
            </ul>