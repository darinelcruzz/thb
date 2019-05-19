<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\RequestInfo;
use Alert;

class SeminarHGController extends Controller
{
    function index()
    {
        return view('seminarhg.index');
    }

    function create()
    {
        
    }

    function store(Request $request)
    {

    }

    function show()
    {
        $user = auth()->user();
        return view('seminarhg.show', compact('user'));
    }

    function edit($id)
    {
        //
    }

    function update(Request $request, $id)
    {
        //
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
