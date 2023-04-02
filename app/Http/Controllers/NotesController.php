<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $uid = Auth::user()->id;
        $notes = Notes::where('userid',$uid)->get();
        
        return view('notes.dashboard', [
            'data' => $notes
        ]);
    }

    public function create(NoteRequest $request)
    {

        Notes::create([
            'userid' => $request->userid,
            'title' => $request->title,
            'note' => $request->note
        ]);

        return redirect('/dashboard');
    }

    public function read($id)
    {
        $note = Notes::Where('id', $id)->get();

        return view('notes.view', [
            'note' => $note
        ]);
    }

    public function edit($id)
    {
        $note = Notes::where('id', $id)->get();

        return view('notes.edit', [
            'note' => $note
        ]);
    }

    public function update($id, NoteRequest $request)
    {
        $note = Notes::find($id);
        $note->update([
            'title' => $request->title,
            'note' => $request->note
        ]);

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $note = Notes::find($id);
        $note->delete();

        return redirect('/dashboard');
    }
}
