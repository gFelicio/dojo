<nav class="header">
    <ul>
        <li>
        	<a href="/">Home</a>
        </li>
        @if(\Auth::guest())
			<li>
				<a href="{{ route('login') }}">Login</a>
			</li>
			<li>
				<a href="{{ route('register') }}">Registrar</a>
			</li>
        @endif
        @if(\Auth::check())
	        <li>
	        	<a href="{{ route('products') }}">Vender</a>
	        </li>
	        <li>
	        	<a href="{{ route('buy') }}">Comprar</a>
	        </li>
	        <li>
	        	<a href="{{ url('/logout') }}">
	        		Logout
	        	</a>
	        </li>
	    @endif
    </ul>
</nav>