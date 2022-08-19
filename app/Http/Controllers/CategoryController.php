<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct(){  $this->middleware('auth');  }

    public function index()
        /* search() mean we are using (local scope) you can see in the model "scopeSearch function" */
    {
        $categories = Category::search()->latest('id')->with('user')->paginate('9')->withQueryString();
        return view('category.index',compact('categories'));
    }

    public function create(){return view('category.create');}

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->title = ucfirst($request->title);
        $category->slug = Str::slug($request->title);
        $category->icon = $request->icon;
        $category->column = $request->column;
        $category->user_id = Auth::id();
        $category->save();

        return redirect()->back()->with('status','category is created.');
    }

    public function show(Category $category){}

    public function edit(Category $category)
    {
        Gate::authorize('controller');
        return view('category.edit',compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        Gate::authorize('controller');
        $category->title = ucfirst($request->title);
        $category->icon  = $request->icon;
        $category->column = $request->column;
        $category->update();

        return redirect()->route('category.index')->with('status','category is updated.');
    }

    public function destroy(Category $category)
    {
        Gate::authorize('controller');
        $category->delete();
        return redirect()->back()->with('status','category is deleted.');
    }
}
