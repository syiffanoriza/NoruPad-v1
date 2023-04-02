<!DOCTYPE html>
<html lang="en">
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
            <a class="btn" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
        </nav>

        <form action="{{ route('logout') }}" id="logout-form" method="POST">
            @csrf
        </form>
    </header>

    <main>
        <div id="dashboard">
            @foreach ($note as $item)
            <div class="flexbox">
                <div id="left">
                    <a href="{{url('/dashboard')}}"><img src="{{asset('assets/images/back.png')}}"></a>
                    <h1 id="hl">{{$item->title}}</h1>
                </div>  

                <div id="right">
                    <form action="{{url("/dashboard/delete/$item->id")}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{url("/dashboard/edit/$item->id")}}" class="btn">Edit</a>
                        <button type="submit" class="btn">Delete</a>
                    </form>
                </div>
            </div>

            <div id="notes" class="view">
                <div class="note">
                    <p>{{$item->note}}</p>
                </div>
            </div>                
            @endforeach
        </div>