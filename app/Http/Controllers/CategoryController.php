<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('front_office/pages/categories/categories', compact('categories'));
    
    }
    public function create()
    {
        return view('front_office/pages/categories/create');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('front_office/pages/categories/show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('front_office/pages/categories/edit', compact('category'));
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Category::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);


        return redirect()->route('categories.index')
            ->with('success', 'category created successfully');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update 
        $category = Category::findOrFail($id);        
        $category->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'category updated successfully');
    }

    public function destroy($id)
    {
        // Delete the category
        $category = category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'category deleted successfully');
    }
}
