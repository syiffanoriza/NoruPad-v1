<!DOCTYPE html>
<head>
    <title>NoruPad</title>

    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/icon.png') }}">
</head>
<body>
    <header>
        <nav>
            <div id="logo">
                <img src="{{ asset('assets/icon.png') }}">
                <h1>NoruPad</h1>
            </div>
            
            @guest
            <div>
                <ul>
                    <li><a class="btn" href="{{route('register')}}">Register</a></li>
                    <li><a class="btn" href="{{route('login')}}">Login</a></li>
                </ul>
            </div>
            @else
            <div>
                <ul>
                    <li><a class="btn" href="{{url('/dashboard')}}">Dashboard</a></li>
                </ul>
            </div>
            @endguest
            
        </nav>

        <div id="banner">
            <h1>All your <span id="hl">notes</span><br>Just a click away</h1>
            <img src="{{ asset('assets/images/stickies2.png') }}">
        </div>
    </header>

    <main>
        <div id="features">
            <div class="card">
                <img src="{{ asset('assets/images/brush.png') }}" alt="">
                <h3>Clean Interface</h3>
                <p></p>
            </div>

            <div class="card">
                <img src="{{ asset('assets/images/positive.png') }}" alt="">
                <h3>User Friendly</h3>
            </div>

            <div class="card">
                <img src="{{ asset('assets/images/infinity.png') }}" alt="">
                <h3>Unlimited Notes</h3>
            </div>

            <div class="card">
                <img src="{{ asset('assets/images/bulb.png') }}" alt="">
                <h3>Free For All</h3>
            </div>
        </div>
    </main>

    <footer>
        <div>
            <img src="{{asset('assets/icon.png')}}" style="height:8em;">
        </div>

        @guest
        <div>
            <h1>Register Now</h1>
            <p>Enjoy <span id="hl">unlimited access</span> to NoruPad</p>
            <a class="btn" href="{{url('/dashboard')}}">Register</a>
        </div>
        @endguest

        <div>
            <h1>Built With</h1>
            <ul id="code">
                <li>Pure CSS</li>
                <li>Laravel PHP</li>
                <li>MySQL Database</li>
            </ul>
        </div>

        <div>
            <h1>Meet The Dev</h1>
            <ul id="socials">
                <li><a href="https://www.linkedin.com/in/syiffa-noriza-6186b6249/"><img src="{{asset('assets/images/linkedin.png')}}"></a></li>
                <li><a href="https://www.behance.net/noriza"><img src="{{asset('assets/images/behance.png')}}"></a></li>
                <li><a href="https://www.instagram.com/noriuza/"><img src="{{asset('assets/images/instagram.png')}}"></a></li>
                <li><a href="https://github.com/syiffanoriza"><img src="{{asset('assets/images/github.png')}}"></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>