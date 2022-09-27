<?php

    namespace App\Http\Validators;
    
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    
    class AddCategoryValidator {

        public static function addCategory($request) {
            return Validator::make($request->all(),[
                                                        'name' => 'required|min:2|max:200',
				                                        'description' => 'max:1000',
                                                    ],
                                                    [
                                                        'name.required' => 'Название категории обязательно для заполнения',
				                                        'name.min:2' => 'Название категории минимум 2 символа',
				                                        'name.max:200' => 'Название категории максимум 200 символов',
				                                        'description.max:1000' => 'Превышена максимальная длина описани. Максимум 1000 символов'
                                                    ]
            );
        }
    }