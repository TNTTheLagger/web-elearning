<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function showForm()
    {
        return view('tesztek.form');
    }
    public function handleForm(Request $request)
    {
        $request->validate([
            'teszt' => 'required|in:matematika,informatika',
        ]);
        return redirect()->route('tesztek.' . $request->input('teszt'));
    }
    public function showMatematika()
    {
        return view('tesztek.matematika');
    }
    public function showInformatika()
    {
        return view('tesztek.informatika');
    }
}

