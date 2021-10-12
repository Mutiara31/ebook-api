<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119129,
            'name'=>'Mutiara Indah Hapsari',
            'phone'=>'6285890063284',
            'class'=>'XII RPL 4'
        ];
    }
}
