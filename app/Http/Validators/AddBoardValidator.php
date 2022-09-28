<?php

    namespace App\Http\Validators;
    
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    
    class AddBoardValidator {

        public static function addBoard($request) {
            return Validator::make($request->all(),[
                                                        'title' => 'required|min:3|max:150',
				                                        'price' => 'required|integer',
                                                        'address' => 'required|min:3|max:20',
                                                        'category' => 'required|integer',
                                                        'description'=> 'required|max:2000',
                                                    ],
                                                    [
                                                        'title.required' => 'Название объявления обязательно для заполнения',
				                                        'title.min:3' => 'Название объявления минимум 3 символа',
				                                        'titel.max:150' => 'Название объявления максимум 150 символов',
                                                        'description.required' => 'Описание объявления обязательно для заполнения',
				                                        'description.max:2000' => 'Превышена максимальная длина описания. Максимум 2000 символов'
                                                    ]
            );
        }
    }