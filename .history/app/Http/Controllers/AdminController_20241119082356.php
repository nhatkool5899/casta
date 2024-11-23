<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\Facility;
use App\Models\HomePage;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

        // $user = new User();
        // $user->email = 'admin@gmail.com';
        // $user->name = 'admin';
        // $user->password = Hash::make('12345678');
        // $user->save();

        return view('admin.login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect('/dashboard');
        } else {

            return redirect('/auth/thinh-phat/admin')->with('message', 'Email hoặc mật khẩu không đúng!');
        }
    }

    public function dashboard()
    {

        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('admin.login');
        
        $month1 = count(Visitor::whereMonth('data_visitor', '1')->get());
        $month2 = count(Visitor::whereMonth('data_visitor', '2')->get());
        $month3 = count(Visitor::whereMonth('data_visitor', '3')->get());
        $month4 = count(Visitor::whereMonth('data_visitor', '4')->get());
        $month5 = count(Visitor::whereMonth('data_visitor', '5')->get());
        $month6 = count(Visitor::whereMonth('data_visitor', '6')->get());
        $month7 = count(Visitor::whereMonth('data_visitor', '7')->get());
        $month8 = count(Visitor::whereMonth('data_visitor', '8')->get());
        $month9 = count(Visitor::whereMonth('data_visitor', '9')->get());
        $month10 = count(Visitor::whereMonth('data_visitor', '10')->get());
        $month11 = count(Visitor::whereMonth('data_visitor', '11')->get());
        $month12 = count(Visitor::whereMonth('data_visitor', '12')->get());


        $start_last_month = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $end_last_month = Carbon::now()->subMonth()->endOfMonth()->toDateString();
        $start_this_month = Carbon::now()->startOfMonth()->toDateString();
        $now = Carbon::now()->toDateString();
        $this_year = Carbon::now()->subDays(365)->toDateString();

        // Count
        $all = count(Visitor::all());
        $visitor_last_month = count(Visitor::whereBetween('data_visitor', [$start_last_month, $end_last_month])->get());
        $visitor_this_month = count(Visitor::whereBetween('data_visitor', [$start_this_month, $now])->get());
        $visitor_year = count(Visitor::whereBetween('data_visitor', [$this_year, $now])->get());

        $arrMonth = [$month1, $month2, $month3, $month4, $month5, $month6, $month7, $month8, $month9, $month10, $month11, $month12];
        return view('admin.dashboard', compact('month1', 'month2', 'month3', 'month4', 'month5', 'month6', 'month7', 'month8', 'month9', 'month10', 'month11', 'month12', 'all', 'visitor_last_month', 'visitor_this_month', 'visitor_year'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/thinh-phat/admin');
    }
    
    public function change_password_index()
    {
        return view('admin.change-password');
    }

    public function change_password(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!Hash::check($request->password, Auth::user()->password)) {
            return back()->withErrors(['password' => 'Mật khẩu hiện tại không đúng.']);
        }

        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('status', 'Mật khẩu đã được thay đổi thành công.');
    }

    public function upload(Request $request)
    {
       if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }


    public function home_index()
    {
        $home = HomePage::find(1);

        return view('admin.home-page', compact('home'));
    }


    public function home_update(Request $request)
    {

        $home = HomePage::find(1);
        $home->title_1 = $request->title_1;
        $home->text_1 = $request->text_1;
        $home->title_2 = $request->title_2;
        $home->text_2 = $request->text_2;
        $home->title_3 = $request->title_3;
        $home->text_3 = $request->text_3;
        $home->title_4 = $request->title_4;
        $home->text_4 = $request->text_4;
      
        $home->save();

        return back()->with('status', 'Cập nhật thành công');
    }

    public function about_index()
    {
        $about = AboutPage::find(1);

        return view('admin.about-page', compact('about'));
    }


    public function about_update(Request $request)
    {

        $about = AboutPage::find(1);
        $about->text_1 = $request->text_1;
        $about->text_2 = $request->text_2;
        $about->text_3 = $request->text_3;

        for ($i=1; $i <= 5 ; $i++) { 
            $imageField = "image_{$i}";

            $get_img = $request->file($imageField);
    
            if ($get_img) {
    
                $get_name_img = $get_img->getClientOriginalName();
                $name_image = current(explode('.', $get_name_img));
                $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_img->getClientOriginalExtension();
    
                $path = 'uploads/about-page/';
    
                $get_img->move($path, $new_image);
    
                $about->$imageField = $new_image;
    
            }
        }

        $get_file = $request->file('file');

        if ($get_file) {

            $get_name_img = $get_file->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image . '-' . rand(0, 99) . '.' . $get_file->getClientOriginalExtension();

            $path = 'uploads/about-page/';

            $get_file->move($path, $new_image);

            $about->file = $new_image;

        }
      
        $about->save();

        return back()->with('status', 'Cập nhật thành công');
    }

}
