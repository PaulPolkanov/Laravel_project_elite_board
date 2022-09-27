<?php

    namespace App\Http\Validators;
    
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    
    class AuthAdminPanelValidator {

        public static function authAdminPanel($request) {
            return Validator::make($request->all(),[
                                                        'name' => 'required',
                                                        'email' => 'required|email:rfc,dns',
				                                        'password' => 'required',
                                                    ],
                                                    [
                                                        'name.required' => 'Введите имя',
                                                        'email.required' => 'Введите email',
                                                        'email.email:rfc,dns' => 'Введите email',
                                                        'password.required' => 'Введите пароль',
                                                    ]
            );
        }
    }