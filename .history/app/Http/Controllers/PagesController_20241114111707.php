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
        
        // $banner = Banner::where('category', 1)->orderBy('id', 'desc')->get();
        // $category = Category::with('service')->get();
        // $service = Service::orderBy('id','desc')->limit(9)->get();
        // $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        // $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        // $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        // $news = News::orderBy('id','desc')->limit(9)->get();
        // $news_other = News::orderBy('id','desc')->limit(6)->get();
        // $partner = Partner::all();
        // $home = HomePage::find(1);
        // $ogTitle = "Công ty cổ phần chứng nhận và giám định MekongCert";

        return view('pages.home');
    }

    public function about(Request $request) {

        // $banner = Banner::where('category', 2)->first();
        // $section = $request->query('section');
        // $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        // $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        // $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        // $about = AboutPage::find(1);
        // $policy_1 = Policy::find(1);
        // $policy_2 = Policy::find(2);
        // $policy_3 = Policy::find(3);
        // $policy_4 = Policy::find(4);
        // $ogTitle = "Giới thiệu về MekongCert";
        
        return view('pages.about', compact('section','service_1', 'service_2', 'service_3', 'about', 'banner', 'policy_1', 'policy_2', 'policy_3', 'policy_4', 'ogTitle'));
    }

    public function about_1(Request $request) {
        $ogTitle = "Chuyển giao công nghệ - CASTA";
        
        return view('pages.about-1', compact('ogTitle'));
    }

    public function update(Request $request) {
        $ogTitle = "Trang đang được xây dựng - CASTA";
        
        return view('pages.update', compact('ogTitle'));
    }

    public function news_1(Request $request) {
        $ogTitle = "Sự kiện - CASTA";
        
        return view('pages.news-1', compact('ogTitle'));
    }

    public function news_2(Request $request) {
        $ogTitle = "Sự kiện - CASTA";
        
        return view('pages.news-2', compact('ogTitle'));
    }

    public function news_3(Request $request) {
        $ogTitle = "Sự kiện - CASTA";
        
        return view('pages.news-3', compact('ogTitle'));
    }

    public function news_4(Request $request) {
        $ogTitle = "Metag+ - CASTA";
        
        return view('pages.news-4', compact('ogTitle'));
    }

    public function services() {
        $banner = Banner::where('category', 3)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        $ogTitle = "Các dịch vụ - MekongCert";

        return view('pages.services', compact('service_1', 'service_2', 'service_3', 'banner', 'ogTitle'));
    }

    public function service_details($slug) {
        $banner = Banner::where('category', 3)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        $service = Service::where('slug', $slug)->first();
        $ogTitle = $service->name;

        return view('pages.service-details', compact('service_1', 'service_2', 'service_3', 'service', 'banner', 'ogTitle'));
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

    public function news_details($slug) {
        $banner = Banner::where('category', 4)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();

        $news = News::where('slug', $slug)->first();
        $news_related = News::where('id', '<>', $news->id)->limit(6)->get();
        $ogTitle = $news->name;

        $previous = News::where('id', '<', $news->id)->orderBy('id', 'desc')->first();

        $next = News::where('id', '>', $news->id)->orderBy('id', 'asc')->first();

        return view('pages.news-details', compact('service_1', 'service_2', 'service_3', 'news', 'news_related', 'banner', 'ogTitle', 'previous', 'next'));
    }

    public function customer() {
        $banner = Banner::where('category', 5)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        $ogTitle = "Khách hàng tại MekongCert";

        $customer = Customer::all();

        return view('pages.customer', compact('service_1', 'service_2', 'service_3', 'customer', 'banner', 'ogTitle'));
    }

    public function contact() {
        $banner = Banner::where('category', 6)->first();
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();
        $ogTitle = "Liên hệ - MekongCert";

        return view('pages.contact', compact('service_1', 'service_2', 'service_3', 'banner', 'ogTitle'));
    }

    public function search(Request $request) {
        $service_1 = Service::where('category_id', 1)->orderBy('id','desc')->get();
        $service_2 = Service::where('category_id', 2)->orderBy('id','desc')->get();
        $service_3 = Service::where('category_id', 3)->orderBy('id','desc')->get();

        $keyword = $request->keyword;

        $service = Service::where('name', 'like', '%'. $keyword . '%')->get();
        $news = News::where('name', 'like', '%'. $keyword . '%')->get();

        $ogTitle = "Tìm kiếm - " . $keyword;

        return view('pages.search', compact('service_1', 'service_2', 'service_3', 'ogTitle', 'keyword', 'service', 'news'));
    }
}
