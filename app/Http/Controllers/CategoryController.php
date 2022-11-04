<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

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
}
