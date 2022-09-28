<?php
namespace App\Http\Validators;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientValidator{
    public static function login($request){
        return Validator::make($request->all(), [
            'password' => 'required|min:2',
            'email' => 'required|email:rfc,dns'
        ]);
    }
}