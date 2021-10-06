<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Category;
class CategoriesController extends Controller
{
    public function create (){
        return view ('categories.create');

    }


      public function store ( Request $request){
     
       $new_category= new Category;
       $new_category->name = $request->name;
        $new_category->save();

        return back();

           // return $request->name ;
    }
    public function index()
    {
        $categories =Category::all();

    return view ('categories.index',compact('categories'));
  
    }
}
