<nav class="w3-top">
    <div class="w3-bar w3-black">
        
        <!-- Hidden Element Of Navbar For Small Screen-->
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" 
           href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
           
        <!-- Left Side Of Navbar -->
        <a href="{{route('home')}}" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Home</a>
        <a href="{{route('games')}}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Games</a>
        
        <!-- Right Side Of Navbar -->
        <!-- Slider For Dark-Light Mode-->
        <div class="w3-bar-item w3-button w3-padding-large w3-right">
            <label class="switch">
                <input type="checkbox" id="mode">
                <span class="slider round"></span>
            </label>
        </div>
        @guest
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
            <div class="w3-hide-small w3-right">
                <label class="w3-padding-large w3-btn" style="cursor: default">
                    {{ Auth::user()->name }} 
                </label>
                <a class="w3-button w3-padding-large" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}"
                method="POST" style="display: none;">
                @csrf
                </form>
            </div>
        @endguest
    </div>
</nav>

<!-- Element Of Drop-down Navbar For Small Screen-->
<nav id='DropDownNav' class='w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top' style='margin-top:46px'>
    <a href="{{route('home')}}" class='w3-bar-item w3-button w3-padding-large' onclick='myFunction()'>HOME</a>
    <a href="{{route('games')}}" class='w3-bar-item w3-button w3-padding-large' onclick='myFunction()'>Games</a>
    @guest
            <a class="w3-bar-item w3-button w3-padding-large" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="w3-bar-item w3-button w3-padding-large" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
            @else
                <a class="w3-bar-item w3-button w3-padding-large" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }} </a>
                <form id="logout-form" action="{{ route('logout') }}"
                method="POST" style="display: none;">
                @csrf
                </form>
    @endguest       
</nav>
