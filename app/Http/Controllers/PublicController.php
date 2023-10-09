<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact(){
        return view('contact');
    }

    public function contactSubmit(Request $request){
        $titolo = $request->title;
        $regista = $request->director;
        $trama = $request->plot;
        
        try{
            Mail::to('info@hack.it')->send(new ContactMail($titolo, $regista, $trama));
        } catch(Exception $error){
            return redirect()->back()->with('errorMessage', 'Richiesta fallita. Riprova più tardi');
        }
        return redirect()->route('homepage')->with('successMessage', 'La tua richiesta è andata a buon fine');
    }
}
