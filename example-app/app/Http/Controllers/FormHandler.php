<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Http\Request;
use App\Models\saveData;
class FormHandler extends Controller
{
    function FormSubmission(Request $req){
            $email = $req->email;
            $pass = $req->pass;
            $obj = new saveData;
            $obj->email=$email;
            $obj->name=$pass;
            $obj->save();
        }
}