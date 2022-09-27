<?php

    namespace App\Http\Validators;
    
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    
    class UpdateCategoryValidator {

        public static function updateCategory($request) {
            return Validator::make($request->all(),[
                                                        'category_name' => 'required|min:3|max:150',
				                                        'category_desc' => 'max:2000',
                                                    ],
                                                    [
                                                        'category_name.required' => 'Название категории обязательно для заполнения',
				                                        'category_name.min:3' => 'Название категории минимум 3 символа',
				                                        'category_name.max:150' => 'Название категории максимум 150 символов',
				                                        'category_desc.max:2000' => 'Превышена максимальная длина описания. Максимум 2000 символов'
                                                    ]
            );
        }
    }