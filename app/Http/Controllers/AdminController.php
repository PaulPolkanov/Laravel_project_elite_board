<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;

use App\Http\Validators\AuthAdminPanelValidator;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


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

	    if ($validator->fails()) {
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
    
}