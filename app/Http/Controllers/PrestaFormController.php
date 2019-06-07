<?php

namespace App\Http\Controllers;

use App\Mail\PrestaFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PrestaFormController extends Controller
{

    public function create()
    {
        return view('prestation');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'objet' => 'required',
            'tel' => 'required',
            'date' => 'required',
            'message' => 'required',
        ]);

        Mail::to('je1taptamere@gmail.com')->send(new PrestaFormMail($data));

        return redirect()->route('prestation');
    }
}
