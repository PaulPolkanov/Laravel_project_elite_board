<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Board;
use App\Models\Category;
use App\Models\User;

use App\Http\Validators\AddBoardValidator;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $template = 'default';

    public function IndexAction(){

        $template = $this->template;
        $categories = Category::get();
        return view('pages.home', compact('template', 'categories'));
    }
    public function CategoryAction($id){
        $template = $this->template;
        $category = Category::where('id', $id)->first();
        if(!$category){
            return abort(404);
        }
        $boards = Board::where('id_category', $id)->get();
        //dd($boards);
        return view('pages.category', compact('template', 'category', 'boards'));
    }
    public function BoardAction($id){
        $template = $this->template;
        $board = Board::where('id', $id)->first();
        if(!$board){
            return abort(404);
        }
        //dd($boards);
        return view('pages.board', compact('template', 'board'));
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