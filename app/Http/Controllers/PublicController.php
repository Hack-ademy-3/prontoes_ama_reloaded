<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()

    { 
    $announcements = Announcement::orderBy('created_at','desc')->take(5)->get();
    return view('welcome', compact('announcements'));
    }

  /*   public function announcementsByCategory($name, $category_id)
    {
        $category = Category::find($category_id);
        $announcements = $category->announcements()->orderBy('created_at','desc')->paginate(5);
        return view('announcements', compact('category', 'announcements'));
    } */
    

        public function index() {
            $announcements = Announcement::where('is_accepted', true)
                ->orderBy('created_at', 'desc')
                ->take(4)
                ->get();
            return view('welcome', compact('announcements'));
        }


        public function announcementsByCategory($name, $category_id) {
            $category = Category::find($category_id);
            $announcements = $category->announcements()
            ->where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
            return view('announcements', compact('category', 'announcements'));
        }

        public function details($id) 
        {
            $announcement = Announcement::findOrFail($id);
            return view("announcement.details",["announcement"=>$announcement]);
        }


        public function locale($locale)
        {
            session()->put('locale', $locale);
            return redirect()->back();
        }
}
