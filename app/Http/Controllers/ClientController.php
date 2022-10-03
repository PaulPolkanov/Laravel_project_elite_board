<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Http\Validators\AddBoardValidator;
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
            return redirect()->route('Home');
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
    public function AddBoardAction(){

        $template = $this->template;

        $categories = Category::get();

        return view('pages.addBoard', compact('template', 'categories'));
    }

    public function AddBoardHandleAction(Request $request){

        
        $validator = AddBoardValidator::addBoard($request);

        if($validator->fails()){
            return redirect()->route('add_board_page')->withErrors($validator)->with('error', 'Ошибка. Объявление не добавлено!');
        }
        
        $board = new Board;

        $board->title = $request->title;
        $board->price = $request->price;
        $board->id_user = 1;//костыль
        $board->id_category = $request->category;
        $board->address = $request->address;
        $board->description = $request->description;
        $board->delivery_type_id = 1;//костыль

        $board->save();

        return redirect()->route('add_board_page')->with('success', 'Объявление успешно добавлено!');

    }
}