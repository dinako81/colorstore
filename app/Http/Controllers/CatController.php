<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Cat;


class CatController extends Controller
{
    
    public function index()
    {
        $cats = Cat::all();

        return view('back.cats.index', [
            'cats' => $cats
        ]);
    }

   
    public function create()
    {
        return view('back.cats.create', [
            
        ]);
    }

   
    public function store(Request $request)
    {
        Cat::create([
            'title' => $request->title,
            'colors_count' => $request->colors_count,
        ]);

        return redirect()->route('cats-index');
    }


    public function edit(Cat $cat)
    {
        //
    }

    
    public function update(Request $request, Cat $cat)
    {
        //
    }

   
    public function destroy(Cat $cat)
    {
        //
    }
}