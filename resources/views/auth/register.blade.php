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
        </nav>
    </header>

    <main>
        <form action="{{route('register')}}" method="POST">
            @csrf

            <div class="flexbox">

            <div id="left">
                <img src="{{asset('assets/images/id.png')}}">
                <h1><span id="hl">Register</span> here</h1>
            </div>

            <div id="right">
                <label for="">Name</label>
                <input type="text" name="name" id="" value="{{old('name')}}">
                @error('name')
                    <p id="error">
                        {{$message}}
                    </p>
                @enderror

                <label for="">E-mail</label>
                <input type="email" name="email" id="" value="{{old('email')}}">
                @error('email')
                    <p id="error">
                        {{$message}}
                    </p>
                @enderror
                
                <label for="">Password</label>
                <input type="password" name="password" id="" value="{{old('password')}}">
                @error('password')
                    <p id="error">
                        {{$message}}
                    </p>
                @enderror
            
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" id="">

                <div class="sided">
                    <button class="btn" type="submit">Register</button>
                    <p>Been here before? <a id="hl" href="{{route('login')}}">Login here</a></p>
                </div>
            </div>
            </div>
        </form>
    </main>

    <footer>
        <div>
            <img src="{{asset('assets/icon.png')}}" style="height:8em;">
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