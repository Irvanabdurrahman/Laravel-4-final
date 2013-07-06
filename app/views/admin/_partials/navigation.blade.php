@if (Sentry::check())
<div class="navbar navbar-inverse">
     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"><a class="brand">Laravel 4</a>	
			<div class="btn-group pull-right">
              <a class="btn btn-success" href="{{ URL::route('admin.logout') }}"><i class="icon-lock icon-white"></i> Logout</a>
			</div>	
		   <ul class="nav">
			  <li class="divider-vertical"></li>
              <li><a href="{{ URL::route('admin.pages.index') }}"><i class="icon-book icon-white"></i> Pages</a></li>
			  <li class="divider-vertical"></li>
              <li><a href="{{ URL::route('admin.articles.index') }}"><i class="icon-edit icon-white"></i> Articles</a></li>
            </ul>
		</div>
      </div>
    </div>
</div>
@endif
