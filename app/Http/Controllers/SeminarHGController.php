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
        $user = auth()->user();
        return view('seminarhg.index', compact('user'));
    }

    function create()
    {
        
    }

    function store(Request $request)
    {

    }

    function show()
    {
        return view('seminarhg.show');
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
