<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Customer;
use App\Models\HomePage;
use App\Models\News;
use App\Models\Partner;
use App\Models\Policy;
use App\Models\Service;
use Illuminate\Http\Request;

class  PagesController extends Controller
{
    public function index() {
        
        $banner = Banner::where('category', 1)->orderBy('id', 'desc')->get();

        $service = Service::all();
        $sv_menu = Service::all();
        // $category = Category::with('service')->get();
        // $news = News::orderBy('id','desc')->limit(9)->get();
        // $news_other = News::orderBy('id','desc')->limit(6)->get();
        // $partner = Partner::all();
        // $home = HomePage::find(1);
        // $ogTitle = "Công ty cổ phần chứng nhận và giám định MekongCert";

        return view('pages.home', compact('banner', 'service', 'sv_menu'));
    }

    public function about(Request $request) {

        // $banner = Banner::where('category', 2)->first();
        // $about = AboutPage::find(1);
        $ogTitle = "Giới thiệu về trung tâm - CASTA";
        
        return view('pages.about', compact('ogTitle'));
    }

    public function service($slug) {
        $service = Service::where('slug', $slug)->first();

        $ogTitle = $service->name . " - CASTA";
        $sv_menu = Service::all();
        
        return view('pages.service', compact('ogTitle', 'service', 'sv_menu'));
    }

    public function about_1(Request $request) {
        $ogTitle = "Chuyển giao công nghệ - CASTA";
        
        return view('pages.about-1', compact('ogTitle'));
    }

    public function about_2(Request $request) {
        $ogTitle = "Cơ cấu tổ chức - CASTA";
        
        return view('pages.about-2', compact('ogTitle'));
    }

    public function about_3(Request $request) {
        $ogTitle = "Thành tích đạt được - CASTA";
        
        return view('pages.about-3', compact('ogTitle'));
    }

    public function recruit(Request $request) {
        $ogTitle = "Tin tuyển dụng - CASTA";
        
        return view('pages.recruit', compact('ogTitle'));
    }


    public function update(Request $request) {
        $ogTitle = "Trang đang được xây dựng - CASTA";
        
        return view('pages.update', compact('ogTitle'));
    }

    public function news_1(Request $request) {
        $ogTitle = "Sự kiện - CASTA";

        $news = News::where('category_id', 1)->orderBy('id','desc')->get();
        
        return view('pages.news-1', compact('ogTitle', 'news'));
    }

    public function news_2(Request $request) {
        $ogTitle = "Tin tức - CASTA";
        $news = News::where('category_id', 2)->orderBy('id','desc')->get();
        
        return view('pages.news-2', compact('ogTitle', 'news'));
    }

    public function news_3(Request $request) {
        $ogTitle = "Cung cầu công nghệ - CASTA";
        $news = News::where('category_id', 3)->orderBy('id','desc')->get();
        
        return view('pages.news-3', compact('ogTitle', 'news'));
    }

    public function news_4(Request $request) {
        $ogTitle = "Metag+ - CASTA";
        
        return view('pages.news-4', compact('ogTitle'));
    }

    public function news() {
        $banner = Banner::where('category', 4)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();

        $news_1 = News::where('category_id', 1)->orderBy('id','desc')->get();
        $news_2 = News::where('category_id', 2)->orderBy('id','desc')->get();
        $ogTitle = "Tin tức và sự kiện - MekongCert";

        return view('pages.news', compact('service_1', 'service_2', 'service_3', 'news_1', 'news_2', 'banner', 'ogTitle'));
    }

    public function news_details() {
        // $banner = Banner::where('category', 4)->first();
        // $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        // $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        // $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();

        // $news = News::where('slug', $slug)->first();
        // $news_related = News::where('id', '<>', $news->id)->limit(6)->get();
        // $ogTitle = $news->name;

        // $previous = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        // $next = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();

        return view('pages.news-details');
    }


    public function contact() {
        // $banner = Banner::where('category', 6)->first();

        $ogTitle = "Liên hệ - MekongCert";

        return view('pages.contact', compact('ogTitle'));
    }

    public function search(Request $request) {

        $keyword = $request->keyword;

        $service = Service::where('name', 'like', '%'. $keyword . '%')->get();
        $news = News::where('name', 'like', '%'. $keyword . '%')->get();

        $ogTitle = "Tìm kiếm - " . $keyword;

        return view('pages.search', compact('service_1', 'service_2', 'service_3', 'ogTitle', 'keyword', 'service', 'news'));
    }
}
