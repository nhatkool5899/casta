<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::all();

        return view('admin.partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required',
                'image' => 'required|image|mimes:png,jpg,webp,jpeg,avif|max:2048',
            ],
            [
                'name.required' => 'Nhập tên',
                'image.required' => 'Chưa chọn ảnh',
                'image.max' => 'Dung lượng ảnh không vượt quá 2MB'
            ]
        );

        $get_img = $request->file('image');

        $partner = new Partner();
        $partner->name = $request->name;
        
        if ($get_img) {


            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/partner/';

            $get_img->move($path, $new_image);

            $partner->image = $new_image;
        }
        $partner->save();

        return redirect('/partner')->with('status', 'Thêm đối tác mới thành công');
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
        $partner = Partner::find($id);

        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $get_img = $request->file('image');

        $partner = Partner::find($id);
        $partner->name = $request->name;
        
        if ($get_img) {


            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();

            $path = 'uploads/partner/';

            $get_img->move($path, $new_image);

            $partner->image = $new_image;
        }
        $partner->save();

        return redirect('/partner')->with('status', 'Thêm đối tác mới thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::find($id);
        
        $path_exits = 'uploads/partner/' . $partner->image;
        if (file_exists($path_exits)) {
            unlink($path_exits);
        }

        Partner::find($id)->delete();

        return back()->with('status', 'Xóa thành công');
    }
}
