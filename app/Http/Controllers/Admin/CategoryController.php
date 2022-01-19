<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $appends = ["getParentsTree"];

    public static function getParentsTree($category, $title)
    {
        if($category->parent_id == 0)
        {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title . ' > ' . $title;
        
        return CategoryController::getParentsTree($parent, $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('children')->get();
        return view('Admin.Categories.category', ['categories' => $categories]);
    }

    /**
     * Insert data
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = new Category;
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        if($request->file('image') != null)
        {
            $data->image = Storage::putFile('image', $request->file('image'));
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->intended('admin/category')->with('success', 'Category Added Successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $categories = DB::select('select * from categories');
        // $category = DB::table('categories')->distinct()->where('id', $id)->get();
        $category = Category::find($id);
        return view('Admin.Categories.edit_category', [
            'category' => $category,
            'categories' => $categories,
        ]);

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $data = Category::find($id);
        $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        if($request->file('image') != null)
        {
            $data->image = Storage::putFile('image', $request->file('image'));
        }
        $data->status = $request->input('status');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->intended('admin/category')->with('success', 'Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')
            ->where('id', $id)
            ->delete();
        return redirect()->intended('admin/category')->with('success', 'Category Deleted Successfully.');
    }
    //Add
    public function add(Request $request)
    {
        $categories = DB::select(
            'select * from categories'
        );
        return view('Admin.Categories.add_category', ['categories' => $categories]);
    }
}
