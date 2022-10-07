<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
    
       return response()->json (Category::all());
    }
    public function store(Request $request)
    {
      $data=$request->all();
      Category::create([
        'name'=> $data['name'],
        'description'=>$data['description'],
        'type'=> $data['type']
      ]);
      return Category::latest()->first()->get();
      
    }
}
