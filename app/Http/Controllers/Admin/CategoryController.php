<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::select('select * from categories');
        return view('Admin.category', ['categories' => $categories]);
    }

    /**
     * Insert data
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('categories')->insert([
            // 'parent_id' => $request->input('parent_id'),
            'title' => $request->input('title'),
            'keywords' => $request->input('keywords'),
            'status' => $request->input('status'),
            'description' => $request->input('description'),
        ]);
        return redirect()->intended('admin/category');
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
        return view('Admin.edit_category', [
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
        // $data->parent_id = $request->input('parent_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->status = $request->input('status');
        $data->description = $request->input('description');
        $data->save();

        return redirect()->intended('admin/category');
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
        return redirect()->intended('admin/category');
    }
    //Add
    public function add(Request $request)
    {
        $categories = DB::select(
            'select * from categories'
        );
        // print_r($categories);
        // exit();
        return view('Admin.add_category', ['categories' => $categories]);
    }
}
