<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.news.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|unique:tbl_news',
                'slug' => 'required|unique:tbl_news',
                'description' => 'required',
                'content' => 'required',
                'image' => 'required|image|mimes:png,jpg,webp,jpeg,avif|max:2048',
            ],
            [
                'name.required' => 'Tiêu đề không thể trống',
                'slug.required' => 'Slug không thể trống',
                'description.required' => 'Mô tả không thể trống',
                'content.required' => 'Nội dung không thể trống',
                'image.required' => 'Hình ảnh không thể trống',
            ]
        );

        $data = $request->all();

        $news = new News();
        $news->category_id = $data['category_id'];
        $news->name = $data['name'];
        $news->slug = $data['slug'];
        $news->description = $data['description'];
        $news->content = $data['content'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/news/';

            $get_img->move($path, $new_image);

            $news->image = $new_image;
        }


        $news->save();

        return redirect('/news')->with('status', 'Thêm bài thành công');
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
        $news = News::find($id);
        $category = Category::all();

        return view('admin.news.edit', compact('news', 'category'));
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
                'description' => 'required',
                'content' => 'required',
                'image' => 'image|mimes:png,jpg,webp,jpeg,avif|max:2048',
            ],
            [
                'name.required' => 'Tiêu đề không thể trống',
                'slug.required' => 'Slug không thể trống',
                'description.required' => 'Mô tả không thể trống',
                'content.required' => 'Nội dung không thể trống',
            ]
        );

        $data = $request->all();

        $news = News::find($id);
        $news->category_id = $data['category_id'];
        $news->name = $data['name'];
        $news->description = $data['description'];
        $news->content = $data['content'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $path_exists = 'uploads/news/' . $news->image;
            if (file_exists($path_exists)) {
                unlink($path_exists);
            }


            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/news/';

            $get_img->move($path, $new_image);

            $news->image = $new_image;

        } 

        $news->save();

        return redirect('/news')->with('status', 'Cập nhật bài thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        if ($news->image != null) {
            $path = 'uploads/news/' . $news->image;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        News::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa bài thành công');
    }

    public function active($id)
    {
        $news = News::find($id);

        $news->status = true;

        $news->save();

        return back();
    }

    public function unactive($id)
    {
        $news = News::find($id);
        $news->status = false;
        $news->save();

        return back();
    }
}
