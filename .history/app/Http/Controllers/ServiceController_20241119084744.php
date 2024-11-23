<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::orderBy('id', 'desc')->get();

        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'slug' => 'required',
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

        $service = new Service();
        $service->name = $data['name'];
        $service->slug = $data['slug'];
        $service->description = $data['description'];
        $service->content = $data['content'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/service/';

            $get_img->move($path, $new_image);

            $service->image = $new_image;
        }


        $service->save();

        return redirect('/service')->with('status', 'Thêm dịch vụ mới thành công');
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
        $service = Service::find($id);

        return view('admin.service.edit', compact('service'));
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

        $service = Service::find($id);
        $service->name = $data['name'];
        $service->slug = $data['slug'];
        $service->description = $data['description'];
        $service->content = $data['content'];

        $get_img = $request->file(('image'));


        if ($get_img) {

            $path_exists = 'uploads/service/' . $service->image;
            if (file_exists($path_exists)) {
                unlink($path_exists);
            }


            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/service/';

            $get_img->move($path, $new_image);

            $service->image = $new_image;

        } 

        $service->save();

        return redirect('/service')->with('status', 'Cập nhật dịch vụ thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        if ($service->image != null) {
            $path = 'uploads/service/' . $service->image;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        Service::find($id)->delete();
        
        return redirect()->back()->with('status', 'Xóa dịch vụ thành công');
    }
}
