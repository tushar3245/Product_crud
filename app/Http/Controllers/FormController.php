<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function GeneralForm(){
return view('general');
    }

    public function RegistrationForm(){
        return view('registration_form');
            }




}
