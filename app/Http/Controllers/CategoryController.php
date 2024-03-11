<?php 
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $categorys = Category::all();
        return view('Admin.adminhome', compact('categorys'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;

        if ($request->hasFile('photo')) {
            $category->photo = $request->file('photo')->store('category_photos');
        }

        $category->save();

        return redirect()->route('adminhome')->with('success', 'Category created successfully.');

    }

    // Update the specified resource in storage.
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $category->name = $request->name;
        $category->description = $request->description;
    
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($category->photo) {
                Storage::delete($category->photo);
            }
            $category->photo = $request->file('photo')->store('category_photos');
        }
    
        $category->save();
    
        return redirect()->route('adminhome')->with('success', 'Category updated successfully.');
    }
    

    // Remove the specified resource from storage.
    public function destroy(Category $category)
    {
        if ($category->photo) {
            Storage::delete($category->photo);
        }
        
        $category->delete();

        return redirect()->route('adminhome')->with('success', 'Category created successfully.');

    }
}
