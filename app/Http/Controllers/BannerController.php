<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::orderBy('id','desc')->get();

        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:4096', 
            ],
            [
                'image.required' => 'Trường image không thể trống'
            ]
        );

        $banner = new Banner();
        $banner->category = $request->category;
       
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            $path = 'uploads/banner/';
            $file->move($path, $fileName);
    
            $banner->image = $fileName;
            
        }
        
        $banner->save();

        return redirect('/banner')->with('status', 'Thêm banner mới thành công');
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
        $banner = Banner::find($id);

        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        $banner->category = $request->category;

       
        if ($request->hasFile('image')) {
            
            $path_exits = 'uploads/banner/' . $banner->image;
            if (file_exists($path_exits)) {
                unlink($path_exits);
            }

            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();

            $path = 'uploads/banner/';
            $file->move($path, $fileName);
    
            $banner->image = $fileName;
            
        }
        
        $banner->save();

        return redirect('/banner')->with('status', 'Cập nhật banner thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        
        $path_exits = 'uploads/banner/' . $banner->image;
        if (file_exists($path_exits)) {
            unlink($path_exits);
        }

        Banner::find($id)->delete();

        return back()->with('status', 'Xóa banner thành công');
    }

    
    public function active($id)
    {
        $banner = Banner::find($id);

        $banner->status = true;

        $banner->save();

        return back();
    }

    public function unactive($id)
    {
        $category = Banner::find($id);
        $category->status = false;
        $category->save();

        return back();
    }
}
