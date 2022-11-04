<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function categorySubmit (Request $request)
    {
        $category = new category();
        $category->category=$request->category;
        $category->save();
        return redirect()->back();
    }

    public function  showcategory()
    {
        $data= category::all();
        return view('welcome',compact('data'));

    }
    public function TodoSubmit(Request $request)
    {

            $task = category::where('category',$request->selected)->get();
            $cid = $task->toArray()[0]['id'];
            $temp = task::create([
               'category_id' => $cid,
               'todo_text' => $request->title,
               'status' => $request->selected,
            ]);

        return redirect()->back();
    }
    public function  showTask()
    {
        $task = task::all();
        $data = category::all();
        return view('welcome', compact(['task', 'data']));
    }
}
