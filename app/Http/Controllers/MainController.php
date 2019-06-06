<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestInfo;
use Alert;

class MainController extends Controller
{
    public function us()
    {
        return view('us');
    }

    public function location()
    {
        return view('location');
    }

    public function activities()
    {
        return view('activities');
    }

    public function privacy()
    {
        return view('privacy_notice');
    }

    public function seminar()
    {
        return view('seminar');
    }

    function requestInfo()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Mail::to('darinel@thb.com.mx')->send(new RequestInfo(request('name'), request('email'), request('message')));

        Alert::success('Nos pondremos en contacto contigo lo antes posible', 'Mensaje enviado')->persistent('Cerrar');

        return redirect('ubicacion');
    }
}
