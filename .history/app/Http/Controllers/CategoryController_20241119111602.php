<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|unique:tbl_category',
                'slug' => 'required',
            ],
            [
                'name.required' => "Tên không thể trống",
                'slug.required' => "Slug không thể trống",
                'name.unique' => "Tên không được trùng",
            ]
        );

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect('category')->with('status', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
            ],
            [
                'name.required' => "Tên không thể trống",
                'slug.required' => "Slug không thể trống"
            ]
        );

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;

        $category->save();

        return redirect('category')->with('status', 'Cập nhật danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Category::find($id)->delete();

        return back()->with('status', 'Xóa danh mục thành công');
    }

}
