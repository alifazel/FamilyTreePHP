<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">FamilyTree</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="/">Home</a></li>
                @if (Auth::check()) 
                    <li><a href="\account">Profile</a></li>
                    <li><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
                @else 
                    <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                    <li><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
                @endif
                
            </ul>
        </div>
    </div>
</div>