<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function AnnouncementList()
    {

        return view('admin.announcement.index');
    }

    public function AddAnnouncement()
    {
        return view('admin.announcement.create');
    }
}
