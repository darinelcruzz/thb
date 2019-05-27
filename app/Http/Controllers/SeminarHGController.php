<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Mail\NewSubscriber;
use App\Subscriber;
use Alert;

class SeminarHGController extends Controller
{
    function index()
    {
        return view('seminarhg.index');
    }

    function create()
    {
        return view('seminarhg.create');
    }

    function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'lastname2' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'cellphone' => 'required',
            'email' => 'required|unique:subscribers',
            'city' => 'required',
            'type' => 'required',
            'origin' => 'sometimes|required',
            'origin2' => 'sometimes|required',
            'document' => 'sometimes|required',
            'workplace' => 'sometimes|required',
            'receipt' => 'required',
        ]);

        $subscriber = Subscriber::create($attributes);

        if ($request->document) {
            $path = Storage::putFile("subscribers/docs/{$subscriber->id}", $request->file('document'));
            $subscriber->update([
                'document' => $path
            ]);
        }

        $path2 = Storage::putFile("subscribers/receipts/{$subscriber->id}", $request->file('receipt'));
        $subscriber->update([
            'receipt' => $path2
        ]);

        Mail::to('darinelcruzz@gmail.com')->send(new NewSubscriber($subscriber));

        return view('seminarhg.message', compact('subscriber'));
    }

    function show()
    {
        $subscribers = Subscriber::all();
        return view('seminarhg.show', compact('subscribers'));
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
