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
        $boards = Board::get();
        return view('pages.home', compact('template', 'categories', 'boards'));
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
       // dd($board->images);
        //dd($boards);
        return view('pages.board', compact('template', 'board'));
    } 
}