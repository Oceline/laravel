<?php

namespace App\Http\Controllers;

use \App\Http\Controllers\Testontrollers;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function accueil() {
        return view ('accueil');
    }

    // public function exit($joceline){
    //     return 'cesi la meshtode';
    //
}
