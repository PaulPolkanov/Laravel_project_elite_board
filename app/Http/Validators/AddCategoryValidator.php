<?php

    namespace App\Http\Validators;
    
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    
    class AddCategoryValidator {

        public static function addCategory($request) {
            return Validator::make($request->all(),[
                                                        'name' => 'required|min:3|max:150',
				                                        'description' => 'max:2000',
                                                    ],
                                                    [
                                                        'name.required' => 'Название категории обязательно для заполнения',
				                                        'name.min:3' => 'Название категории минимум 3 символа',
				                                        'name.max:150' => 'Название категории максимум 150 символов',
				                                        'description.max:2000' => 'Превышена максимальная длина описания. Максимум 2000 символов'
                                                    ]
            );
        }
    }