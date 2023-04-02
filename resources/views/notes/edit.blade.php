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
            <form action="{{url("dashboard/patch/$item->id")}}" method="POST">
            @csrf
            @method('PATCH')
            
            <div class="flexbox">
                <div id="left">
                    <a href="{{url('/dashboard')}}"><img src="{{asset('assets/images/back.png')}}"></a>
                    <input type="text" name="title" placeholder="Title" id="hl" required value="{{$item->title}}">
                </div>  

                <div id="right">
                    <button type="submit" class="btn">Save</a>
                </div>
            </div>

            <div id="notes" class="view">
                <div class="note">
                    <textarea name="note" rows="10" required>{{$item->note}}</textarea>
                </div>
            </div>            
            </form>
            @endforeach
        </div>
    </main>