<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use App\Http\Validators\AuthAdminPanelValidator;
use App\Http\Validators\AddCategoryValidator;
use App\Http\Validators\DeleteCategoryValidator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Category;


class AdminController extends Controller
{
    private $template = 'admin';

    public function IndexAction(){

        $template = $this->template;

        return view('pages.admin.dashboard', compact('template'));
    }

    public function LoginAction(){

        if(Auth::check()){
            return redirect()->route('dashboard');
        }

        return view('pages.admin.login');
    }

    public function LogoutAction(){

        Auth::logout();

        return redirect()->route('admin_login');
    }

    public function AuthAction(Request $request){

        $validator = AuthAdminPanelValidator::authAdminPanel($request);

	    if ($validator->fails()){
			return redirect()->route('admin-login')->withErrors($validator);
		}
        if (Auth::attempt([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('admin-login');
        }
        
    }

    public function CategoriesAction(){

        $template = $this->template;

        $categories = Category::get();
        

        return view('pages.admin.categories', compact('template', 'categories'));
    }

    public function AddCategoryAction(Request $request){

        $validator = AddCategoryValidator::addCategory($request);

        if ($validator->fails()){
			return redirect()->route('admin_categories')->withErrors($validator)->with('error', 'Ошибка. Не удалось добавить категорию!');
		}

        

        $category = new Category;

        $category->name = $request->name;
        $category->img = 'you.png';
        $category->description = $request->description;
        $category->save();

        return redirect()->route('admin_categories')->with('success', 'Категория успешно добавлена!');
    }

    public function DeleteCategoryAction(Request $request){

        $validator = DeleteCategoryValidator::deleteCategory($request);

        if($validator->fails()){
            return redirect()->route('admin_categories')->withErrors($validator)->with('error', 'Ошибка. Категория не удалена!');
        }

        Category::where(['id' => $request->category_id])->delete();

		return redirect()->route('admin_categories')->with('success', 'Категория успешно удалена!');
    }
    
}