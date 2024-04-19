<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){
        
        return view('annunci.create');
        
    }
    public function showAnnouncement (Announcement $announcement) {
      
        return view('annunci.show',compact('announcement'));
    }
    public function index (Announcement $announcement) {
      
        $announcements = Announcement::paginate(10);
        return view('annunci.index',compact('announcements'));
    }
}
