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
            <div class="flexbox">
                <div id="left">
                    <h1>Hello, <span id="hl">{{Auth::user()->name}}</span></h1>
                </div>

                <div id="right">
                    <button class="btn" id="modalC">+ Add a note</button>
                </div>
            </div>

            <div id="modalbg1" class="modal">
                <div id="create" class="modalbox">
                    <form action="{{url('/note')}}" method="POST">
                        @csrf
                        <div>
                        <span id="closeC" class="modalclose">&times;</span>
                        <input type="text" name="userid" value="{{Auth::user()->id}}" class="hidden" readonly>
                        <input type="text" name="title" placeholder="Title" value="{{old('title')}}" id="create" required>
                        </div>
                        <div>
                        @error('title')
                            <p id="error">
                                {{$message}}
                            </p>
                        @enderror
                        <textarea name="note" rows="4" placeholder="Type something here" required>{{old('note')}}</textarea>
                        @error('note')
                            <p id="error">
                                {{$message}}
                            </p>
                        @enderror                            
                        </div>
                        <div>
                        <button class="btn" type="submit">+ Add note</button>
                        <a class="btn" id="cancel">Cancel</a>                        
                        </div>
                    </form>
                </div>
            </div>

            <div id="notes">
            @foreach ($data as $item)
                <div id="view" class="note" onclick="window.location='http://localhost:8000/dashboard/view/{{$item->id}}'">
                    <div id="nleft">
                        <h2>{{$item->title}}</h2>
                        <p>{{$item->note}}</p>
                    </div>
                    <div id="nright">
                        <form action="{{url("/dashboard/delete/$item->id")}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{url("/dashboard/edit/$item->id")}}"><img src="{{asset('assets/images/edit.png')}}"></a>
                            <button type="submit"><img src="{{asset('assets/images/trash.png')}}"></a>
                        </form>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>
</body>

<script>
let bgC = document.getElementById("modalbg1");
let cmodal = document.getElementById("create");
let cbtn = document.getElementById("modalC");
let closeC = document.getElementById("closeC");
let cancel = document.getElementById("cancel");

cbtn.onclick = function() {
    cmodal.style.display = "flex";
    bgC.style.display = "block";
}

closeC.onclick = function() {
    cmodal.style.display = "none";
    bgC.style.display = "none";
}

cancel.onclick = function() {
    cmodal.style.display = "none";
    bgC.style.display = "none";
}
</script>
</html>