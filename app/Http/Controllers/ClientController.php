<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Http\Validators\ClientValidator;
use App\Models\Board;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    private $template = 'default';
    public function loginAction(){
        $template = $this->template;
        return view('pages.client.login', compact('template'));
    }
    public function loginPostAction(Request $request){
        $validator = ClientValidator::login($request);
        if($validator->fails()){
            return redirect()->route('loginlk');
        }
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,])){
            return redirect()->route('profile');
        }
        else{
            return redirect()->route('loginlk');
        }
    }
    public function logoutAction(){

    }
    public function profileAction(){
        $template = $this->template;
        $user = Auth::user();
        return view('pages.client.profile', compact('template', 'user'));
    }
    public function FavoriteBoardAction(){

    }
}