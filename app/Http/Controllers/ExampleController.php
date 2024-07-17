<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    function cv () {
        return view('cv');
    }

    function login(){
        return view('login');
        }

        function contact(){
            return view('contact');
            }

            function cont (Request $req){
                return($req->input());
            }
        
        }
